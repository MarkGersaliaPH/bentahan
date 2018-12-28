<?php

namespace App\Http\Controllers; 
use Auth;
use Session;
use DB;
use App\Cart;
use App\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function index(Request $request){
    	$session_id = session_id();
 	// $value = Session::flash('key', 'token');
    	$cart = Cart::where('session_id','=',$session_id)
              ->where('status','=','pending')
              ->get();
      // echo "<pre>";
      // print_r($cart);
      // exit();
    	// $cart = DB::table('carts')
	    //         ->join('items', 'items.id', '=', 'carts.item_id')
	    //         ->where('carts.session_id','=',$session_id)
    	// 		->get();

    	return view('cart.index',['cartData'=>$cart]);
    }
 

    public function add(Request $request){ 
     $session_exists = Cart::where('session_id','=',session_id())->get();
      $status ='';
     if(!empty($session_exists)){
       
      $item_exists = Cart::where('item_id','=',$request->id)->where('session_id','=',session_id())->first();
      if(!empty($item_exists)){
        $status = 'Item exitsts'; 
        $quantity = $item_exists->quantity;
        Cart::where(['status'=>'pending','item_id'=>$request->id,'session_id'=>session_id()])->update(['quantity'=>$quantity + 1]);
      }else{
        $cart_create = Cart::create(['status'=>'pending','item_id'=>$request->id,'session_id'=>session_id()]);
      }
      // $status = 'Session Exists';
     }else{
      $cart_create = Cart::create(['status'=>'pending','item_id'=>$request->id,'session_id'=>session_id()]);
     }
     return response()->json($status);
    } 

    public function add2(Request $request){

      $item_id = $request->id;
      $quantity = $request->quantity;
      $session_id = session_id();
     $session_exists = Cart::where('session_id','=',session_id())
                      ->where('item_id','=',$item_id)
                      ->count();
     $status ='';
     // return $session_exists;
     // die();
     if(!empty($session_exists)){

        $cart_update = Cart::where(
          [
            'status'=>'pending',
            'item_id'=>$item_id,
            'session_id'=>$session_id
          ]
        )->update(['quantity'=>$quantity]);
        if ($cart_update) {
          $status = ['status'=>'cart updated'];
        }else{
          $status = ['status'=>'error on updating'];
        }
      }else{
      $cart_create = Cart::create(
        [
        'status'=>'pending',
        'item_id'=>$item_id,
        'quantity'=>$quantity,
        'session_id'=>$session_id
        ]
      );
      if ($cart_create) {
        
          $status = ['status'=>'cart created'];
      }else{

          $status = ['status'=>'error on creating'];
      }
     }

     return response()->json($status);

    }
    
    public function count(){
    	$session_id = session_id();
        // $count = Cart::where('session_id','=',$session_id)->where('status','!=',)->sum('quantity');
        $count = Cart::where('session_id','=',$session_id)
        ->where('status','=','pending')
        ->sum('quantity');
        return response()->json($count);
    }

    public function remove($id){
   		// print_r($request->session_id); 
   		$cart = Cart::find($id);
   		if($cart->delete()){
			$status = ['status' => 'Success'];  			
   		}
    	return response()->json($status);
    }

    public function updateQuantity(Request $request){
    	$id = $request->cartId;
    	$quantity = $request->quantity;

    	$cart = Cart::find($id);
    	$cart->quantity = $quantity;
    	$cart->save();

    }

}
