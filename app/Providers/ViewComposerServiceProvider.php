<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Products;
use Illuminate\Support\Facades\View;
class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Using wildcard '*' to apply to all views
        View::composer('*', function ($view) {
            // Define your variables here
            $products = Products::where('status', 'active')->where('showing_frontend', 1)->get();
            $user = auth()->user();
            $view->with('user', $user)->with('frontend_enabled_product_list', $products);
        });
    }
}
