<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 15:23
 */

namespace Hafizabass\Modules\Product;

use Illuminate\Support\ServiceProvider;


class ProductServiceProvider extends ServiceProvider
{
	
	/**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
	
	
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../product/views', 'products');

        $this->publishes([
            __DIR__.'/../../product/views' => base_path('resources/views/modules/products'),
        ], 'products');

        $this->publishes([
            __DIR__.'/../../config/products.php' => config_path('products.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../../migrations/' => base_path('/database/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../../product/controllers' => base_path('/app/http/controllers')
        ], 'productController');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/products.php', 'products');
//        include __DIR__ .'/../routes.php';
//        $this->app->make('Hafizabass\Modules\Product\ProductController');
    }
}