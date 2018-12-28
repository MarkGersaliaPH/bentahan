<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;
use App\User;
use App\Item;
use Auth;
use Blade;
use App\ItemReview;
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
        
        Blade::directive('star',function($id){
        $reviews = new ItemReview();
        $data = $reviews->getTotalRatings($id);
        // $data = $reviews->reviews_count($id);
            return $id;
        });
 
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        $data['order_id'] = $unique = $today . $rand; 
            
        $data['categories'] = DB::table('categories')->limit(8)->offset(8)->get(); 
        $data['categories_all'] = DB::table('categories')->orderBy('category')->get(); 
        $data['item_brand'] = Item::select('brand')->get();
        View::share($data);
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
