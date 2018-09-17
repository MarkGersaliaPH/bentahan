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

Route::get('/', function () { 
    $items = App\Item::All();
    return view('pages.index',['items'=>$items]);
});



Route::get('/product/search/','ItemController@search');

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
        return redirect('/stores');
    }
    else{
        return redirect('/my_account');
    } 
});

Route::get('/stores',function(){

        return view('stores.dashboard');
});

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


Route::get('my_account',function(){
    $myItem = App\Item::where('seller_id','=',Auth::user()->id)->get();
    return view('pages.my_account',['myItem'=>$myItem]);
});

Route::get('/my_account/items/view/{id}',function($id){ 
    $myItem = App\Item::find($id);

    return view('pages.my_profile.items.view',['myItem'=>$myItem]);
});

Route::get('billing/index','BillingAddressController@index');


Route::get('/product/view/{slug}/{id}','ItemController@show');

Route::get('/products/sell',function(){
    return view('pages.sell');
});

Route::post('/products/store','ItemController@store');
Auth::routes();

Route::get('/home',function(){
    return redirect('admin');
});
