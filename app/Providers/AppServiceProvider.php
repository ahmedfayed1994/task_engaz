<?php

namespace App\Providers;

use App\Interfaces\uploadsInterfaces;
use App\Services\ProductService;
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
        $this->registerProductData();
        $this->app->bind(uploadsInterfaces::class);
    }

    public function registerProductData()
    {
        $this->app->singleton(ProductService::class);
    }

}
