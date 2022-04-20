<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Sku;
use App\Observers\SkuObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('routeactive', function ($route) {
            return "<?php echo Route::currentRouteNamed($route) ? 'class=\"active\"' : '' ?>";
        });

        Blade::directive('activeadminpanel', function ($route) {
            return "<?php echo Route::currentRouteNamed($route) ? ' active ' : '' ?>";
        });

        Blade::if('admin', function () {
            return Auth::check() && Auth::user()->isAdmin();
        });

        Blade::if('person', function () {
            return Auth::check() && !Auth::user()->isAdmin();
        });

        Sku::observe(SkuObserver::class);
    }
}
