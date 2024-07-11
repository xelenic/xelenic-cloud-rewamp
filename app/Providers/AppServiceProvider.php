<?php

namespace App\Providers;

use App\Services\Products\ProductService\ProductService;
use Illuminate\Support\ServiceProvider;
use App\Services\Payment\StripeService;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StripeService::class, function ($app) {
            return new StripeService();
        });




    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        foreach (config('landing.menus.landing') as $item)
        {
            if($item['title'] == 'Products')
            {
                config(['landing.menus.landing.items' => ProductService::getFeatureProductMenu()]);
            }
        }
    }
}
