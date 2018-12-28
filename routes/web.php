<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');


Route::get('/item/search/','ItemController@search')->name('item.search');

Route::get('/login',function(){ 
    return view('auths.login');
});

Route::get('/admin',function(){ 
    $itemsCount = App\Item::All()->count();
    if(Auth::user() == null){ 
        return view('admin.login');
    }

    if(Auth::user()->type == 1){
        return view('admin.index');
    }elseif(Auth::user()->type == 3){
        return redirect('/dashboard/store');
    }
    else{
        return redirect('/my_account');
    } 
});



//     //Group dashboard routes
// Route::group(['prefix' => 'dashboard'], function(){



// });

Route::get('categories/{category}','SearchController@byCategory')->name('categories.view');

Route::get('admin/customers',function(){
    $customers = App\User::where('type','=',2)->orderBy('id','DESC')->get();
    return view('admin.customers',['customers'=>$customers]);
});

Route::any('admin/stores',function(){
    $stores = App\User::orderBy('users.id','DESC')->where('type','=',3)->get();
    // echo $stores;
    return view('admin.stores.index',['stores'=>$stores]);
});

Route::get('admin/users',function(){
    $users = App\User::where('type','=',4)->orderBy('id','DESC')->get();
    return view('admin.system.users',['users'=>$users]);
});

Route::get('admin/items',function(){
    $items = App\Item::orderBy('id','DESC')->get();
    return view('admin.items.index',['items'=>$items]);
});

Route::get('admin/items/view/{id}',function($id){
    $items = App\Item::find($id);
    return view('admin.items.view',['items'=>$items]);
});


Route::get('admin/customers/view/{id}',function($id){
    $customer = App\User::find($id); 
    $itemPosted = App\Item::All();  
    return view('admin.customers.view',['customer'=>$customer,'itemPosted'=>$itemPosted]);
});


Route::get('admin/store/view/{slug}',function($slug){
    $store = App\Store::where('slug','=',$slug)->first(); 
    return view('admin.stores.view',['store'=>$store]);
});

Route::get('admin/store/add',function(){
        return view('admin.stores.add');
});

Route::post('admin/store/storedData','StoreController@store');

Route::get('admin/categories',function(){
    $categories = App\Category::orderBy('id','DESC')->get();
    return view('admin.categories',['categories'=>$categories]);
});



Route::get('billing/index','BillingAddressController@index');


Route::get('/item/view/{id}','ItemController@show')->name('item_view');

Route::get('/products/sell',function(){
    return view('pages.sell');
});




Route::get('/product/view/{slug}/{id}','ItemController@show');


Route::get('/store/view/{id}','StoreController@show')->name('store.view');



Route::post('/products/store','ItemController@store');



Route::get('/cart/view/','CartController@index')->name('cart');


Route::group(['middleware' => 'auth'], function () {



Route::get('/checkout', 'CheckoutController@index')->name('checkout');


Route::get('my_account',function(){
    $myItem = App\Item::where('seller_id','=',Auth::user()->id)->get();
    return view('pages.my_account',['myItem'=>$myItem]);
})->name('my_account');

// Route::get('my_account/users/','OrderController@customer_orders')->name('customer.orders');

Route::get('/my_account/items/view/{id}',function($id){ 
    $myItem = App\Item::find($id);

    return view('pages.my_profile.items.view',['myItem'=>$myItem]);
});


Route::group(['prefix' => 'reviews'], function()
{
    Route::post('add/{item_id}/','ItemReviewController@create')->name('review.add');
});

Route::group(['prefix' => 'users'], function()
{
    Route::get('/orders','OrderController@customer_orders')->name('customer.orders');
    Route::get('/address','AddressController@customer_address')->name('customer.address');
    Route::post('/address','AddressController@update_address')->name('customer.update.address');
    Route::get('/orders/{id}','OrderController@customer_orders_view')->name('customer.orders.view');
    Route::post('/upload','StoreDashboardController@post_upload');
    Route::get('/account/info','HomeController@cusomer_account_info')->name('customer.account.info');
    Route::post('/account/update','HomeController@update_account_info')->name('customer.account.update');
    Route::post('/account/update_pic','HomeController@update_profile_pic')->name('customer.update_pic');
    Route::get('/account/password','UserController@password')->name('customer.password');
    Route::post('/account/change-password','UserController@change_password')->name('customer.change.password');

});



    //Group dashboard routes
    Route::group(['prefix' => 'dashboard'], function()
    {

        //Stores dashboard
        Route::group(['prefix' => 'store'], function()
        {



            Route::get('/','StoreDashboardController@index')->name('storeDashboard');

            Route::get('/store_details','StoreDashboardController@store_details')->name('storeDetails');
            Route::post('/store_details_submit','StoreDashboardController@store_details_submit')->name('storeDetailsSubmit');
            Route::post('/update_logo','StoreController@store_update_logo')->name('store_update_logo');
            Route::post('/update_banner','StoreController@store_update_banner')->name('store_update_banner');
            Route::get('/my_account','StoreDashboardController@my_account')->name('storeMyAccount');

            //Item groups
            Route::group(['prefix' => 'items'],function(){
                Route::get('/','StoreDashboardController@items')->name('storeItems');
                Route::get('/{status?}','StoreDashboardController@items')->name('itemStatus');
                Route::any('/new/create','StoreDashboardController@addItem')->name('addItem');
                Route::any('/update/{id}','StoreDashboardController@item_update')->name('ItemUpdate');
                Route::any('/update/submit/{id}','StoreDashboardController@item_update_submit');
                Route::any('/view/{id}','StoreDashboardController@item_view')->name('ItemView');
                Route::any('/remove/{id}','StoreDashboardController@item_remove');
                Route::get('/sell/{id}','StoreDashboardController@item_sell')->name('sellItem');
            });

            //Order groups
            Route::group(['prefix' => 'orders'],function(){
                Route::get('/','OrderController@index')->name('storeOrders');
                Route::get('/view/{id}','OrderController@view')->name('order.view');
                Route::post('/update_history/{id}','OrderController@update_history')->name('updateOrderHistory');
            });
 

        });

        // Controllers Within The "App\Http\Controllers\Admin" Namespace
    });

});



Route::group(['prefix'=>'charts'],function(){
    Route::get('orders','OrderController@charts');
});


Route::post('/order','CheckoutController@order')->name('order');

Route::get('/order/thank_you',function(){
    return view('pages.order_success');
})->name('orderSuccess');


Auth::routes();

Route::get('/home',function(){
    return redirect('admin');
});

Route::get('check_email/{email?}','UserController@check_email');


Route::any('/check_password/{password?}','StoreDashboardController@check_password')->name('check_password');
            