<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('front-end.*',function($view){
             $view->with([ 
                 'menus'                    => Menu::where('activationStatus',1)->get(),
                 'categories'               => Category::where('publication_status',1)->orderBy('clickCount','desc')->take(8)->get(),
                 'brands'                   => Brand::where('publication_status',1)->take(8)->get(),
            ]);
         });
    }
}
