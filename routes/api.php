<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
        

// });


Route::post('category/store','CategoryController@store');

Route::any('store/add','StoreController@store');

Route::get('category/destroy/{id}','CategoryController@destroy');

Route::get('items/count','ItemController@count');

Route::get('items/restock/{id}','ItemController@restock');
Route::post('items/restock2/','ItemController@updateStock');

Route::get('item/status/{status}/{id}','OrderController@update_status');
Route::get('item/status/{status}/{id}','OrderController@update_status');

Route::get('customers/customerCount','UserController@customerCount');

Route::get('store/count','StoreController@count');

Route::get('categories/count','CategoryController@count');

Route::any('billing_address/store','BillingAddressController@store');


//Cart functions
Route::get('cart/add/{quantity}/{id}','CartController@add2');
Route::any('cart/count','CartController@count');
Route::any('cart/remove/{id}','CartController@remove');
Route::POST('cart/updateQuantity/','CartController@updateQuantity');



