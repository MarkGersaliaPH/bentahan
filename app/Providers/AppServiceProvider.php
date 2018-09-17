<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $categories = DB::table('categories')->limit(8)->offset(8)->get(); 
        $categories_all = DB::table('categories')->orderBy('category')->get(); 

        View::share(['categories'=>$categories,'categories_all'=>$categories_all]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
