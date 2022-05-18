<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Sku;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request)
    {
        $skusQuery = Sku::with(['product', 'product.category']);

        if ($request->filled('price_from')) {
            $skusQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $skusQuery->where('price', '<=', $request->price_to);
        }

        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $skusQuery->whereHas('product', function ($query) use ($field) {
                    $query->$field();
                });
            }
        }

        if ($request->filled('search')) {
            $skusQuery->join('products', 'products.id', '=', 'skus.product_id')->where('products.name', 'like',
                '%' . $request->search . '%');

            if ($skusQuery->get()->isEmpty()) {
                session()->now('warning', __('main.not_found'));
            }
        }

        $skus = $skusQuery->paginate(12)->withPath("?" . $request->getQueryString());

        return view('index', compact('skus'));
    }

    public function categories()
    {
        return view('categories');
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();

        if (is_null($category)) {
            abort(404, 'Page not found');
        }

        return view('category', compact('category'));
    }

    public function sku($categoryCode, $productCode, Sku $sku)
    {
        if ($sku->product->code != $productCode) {
            abort(404, 'Product not found');
        }

        if ($sku->product->category->code != $categoryCode) {
            abort(404, 'Category not found');
        }
        return view('product', compact('sku'));
    }

    public function subscribe(SubscriptionRequest $request, Sku $sku)
    {
        Subscription::create([
            'email' => $request->email,
            'sku_id' => $sku->id,
        ]);
        return redirect()->back()->with('success', __('mail/subscription.thanks_for_subscription'));
    }

    public function changeLocale($locale)
    {
        $availableLocales = ['ua', 'en'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function changeCurrency($currencyCode)
    {
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }
}
