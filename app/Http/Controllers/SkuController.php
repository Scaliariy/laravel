<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkuRequest;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Support\Facades\Storage;

class SkuController extends Controller
{
    public function index(Product $product)
    {
        $skus = $product->skus()->paginate(10);
        return view('auth.skus.index', compact('skus', 'product'));
    }

    public function create(Product $product)
    {
        return view('auth.skus.form', compact('product'));
    }

    public function store(SkuRequest $request, Product $product)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $path = $request->file('image')->store('images/products');
            $params['image'] = $path;
        } else {
            $path = 'images/image-not-found.png';
            $params['image'] = $path;
        }
        $params['product_id'] = $request->product->id;
        $sku = Sku::create($params);
        $sku->propertyOptions()->sync($request->property_id);
        return redirect()->route('skus.index', compact('product'));
    }

    public function show(Product $product, Sku $sku)
    {
        return view('auth.skus.show', compact('product', 'sku'));
    }

    public function edit(Product $product, Sku $sku)
    {
        return view('auth.skus.form', compact('product', 'sku'));
    }

    public function update(SkuRequest $request, Product $product, Sku $sku)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($sku->image);
            $path = $request->file('image')->store('images/products');
            $params['image'] = $path;
        }

        $params['product_id'] = $request->product->id;
        $sku->update($params);
        $sku->propertyOptions()->sync($request->property_id);
        return redirect()->route('skus.index', compact('product'));
    }

    public function destroy(Product $product, Sku $sku)
    {
        $sku->delete();

        return redirect()->route('skus.index', compact('product'));
    }
}
