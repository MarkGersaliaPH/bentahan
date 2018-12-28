<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use App\User;
use App\Address;
use App\Item;
use Auth;

class CheckoutController extends Controller
{
    //


    // use RegistersUsers;

    // /**
    //  * Where to redirect users after registration.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/order/thank_you';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }


    public function index(){

    	$session_id = session_id();
 	// $value = Session::flash('key', 'token');
    	$data['cartData'] = Cart::where('session_id','=',$session_id)
              ->where('status','=','pending')
              ->get();

        $data['user_address'] = Address::with('user')
        ->where('user_id','=',Auth::user()->id)
        ->first();
    	return view('pages.checkout',$data);
    }

    public function order(Request $request){
    	// echo "<pre>";
    	// print_r($request->ShippingAddress);
    	// print_r(bcrypt($request->User));
    	// print_r($request->User);
    	// echo "</pre>";
        // die();

    	$cartDatas = $request->Cart;



        $user_id  = Auth::user()->id;
    	$address_id = ['user_id' => $user_id];
    	$address_data = array_merge($request->ShippingAddress, $address_id); 
    	// Saving the address

    	// $this->saveAddress($address_data);
        // exit();

    	$payment_method = $request->Order['payment_method'];
    	//Save the cart data to orders table
    	foreach ($cartDatas as $key => $value) {
    		# code... 


    		$cart_id = $value['id']; 
    		$cart_info = Cart::find($cart_id);  

	    	$itemData = Item::where('id','=',$cart_info->item_id)->first();
            $seller_id = $itemData['seller_id'];
    		$order = new Order();
    		$order->buyer_id = $user_id; 
    		$order->seller_id = $seller_id;
            $order->quantity = $cart_info->quantity;
            $order->item_id = $cart_info->item_id;
            $order->payment_method = $payment_method;
            $order->order_id =  $this->generateOrderId($seller_id);
            $order->transaction_id = $this->generateTransactionId($cart_info->item_id,$seller_id);
    		// exit();
    		//Get the seller id for saving
            if ($order->save()) {  
                $cart = Cart::find($cart_id);
                // $cart->status = 'ordered';
                $this->updateItemStock($cart_info->quantity,$itemData['id']);
                $cart->delete();
            } 

    	}

    	return redirect(route('orderSuccess'));

    }

    function updateItemStock($quantity,$item_id){
        $item = Item::find($item_id);
        $diff = $item->stock - $quantity;
        $item->stock = $diff;
        return $item->save();
        // $item->quantity = 
    }
 
    function generateOrderId($seller_id){

            $order = Order::where('seller_id','=',$seller_id)->orderBy('id','DESC')->first(); 
            // print_r($order->id);
            if ($order == null) {
                  $order_id = "O1-".date('Ymdhis')."-".$seller_id;
            }else{ 
                $order_id = "O".$order->id.'-'.date('Ymdhis')."-".$seller_id;
            }
            return $order_id;
 
    }


    function generateTransactionId($item_id,$seller_id){
        //Get item details
        $item = Item::where('id','=',$item_id)->first();
        echo $item_id;
        $item_title = $item->title;
        
        //Get order details
        $order = Order::where('seller_id','=',$seller_id)->orderBy('id','DESC')->first(); 

        if ($order == null) {
            $num = 1;
        }else{
            $num = $order->id; 
        }
 
        //Year month day hour mins seconds
        $date = date('Ymdhis');

        //Get 001 format with order of order_id
        $order = str_pad($num, 4, '0', STR_PAD_LEFT);

        //get initials 
        $words = preg_split("/[\s,_-]+/", $item_title);
        $acronym = "";

        foreach ($words as $w) {
          $acronym .= $w[0];
        }

        $transaction_id = strtoupper($acronym).'-'.$date.$order;
        return $transaction_id;
        
    }
     /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

    	// return print_r($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getSellerId($id){
    	$id = Cart::find($id);
    	$seller_id = Item::where('seller_id','=',$id->item_id)->first();
    	// print_r($seller_id->seller_id);
    	// exit();
    	return $data = $seller_id->seller_id;
    }

    public function saveAddress(array $data){
    	return Address::create($data);

    }

    public function updateCart(array $data){
    	return Cart::create($data);
    }
}
