<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderHistory;
use Auth;
use User;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function charts(){
       $orders = Order::where('seller_id','=',Auth::user()->id)->count();
       $completed = $this->get_chart_status('completed');
       $canceled = $this->get_chart_status('canceled');
       $pending = $this->get_chart_status('pending');
       $processing = $this->get_chart_status('processing');

       
       $data = [$completed,$canceled,$pending,$processing];
        return response()->json($data);
    }

    public function get_chart_status($status = null){

        $condition = ['seller_id'=>Auth::user()->id,'status'=>$status];
        $data = Order::where('seller_id','=',Auth::user()->id)
                        ->where($condition)
                        ->count(); 
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $data['pageTitle'] = 'Orders';
        $data['nav_class'] = $data['pageTitle'];
        $data['data'] = Order::orderBy('id','DESC')
                        ->where('seller_id','=',Auth::user()->id)
                        ->get();
        // $myAccount = User::where('id','=', Auth::user()->id)->first();
        return view('stores.orders',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function view(Request $request)
    {   
        $request = $request->id;   
        $data['order'] = $this->getByTransaction($request);
        $data['pageTitle'] = 'Review Order';
        $data['nav_class'] = 'Orders';
        return view('stores.orders.view',$data);
    }


    public function getByTransaction($transaction_id){ 
        $data = Order::where('transaction_id','=',$transaction_id)->first();
        return $data;
    }

    public function getCustomerAddress($transaction_id){
        $data = Order::where('transaction_id','=',$transaction_id)->first();
        return $data;
        $data['address'] = Address::with('user')->where('user_id','=',Auth::user()->id)->first();
    }

   public function update_history(Request $request)
    { 
        OrderHistory::create($request->data['Order']);
        $order = $request->data['Order'];
        $update_order = Order::where(['id'=>$order['order_id']])->update(['status'=>$request->data['Order']['status']]);
        return redirect()->back();
    }

    public function update_status(Request $request){

        $order = $this->getByTransaction($request->id);
        $status = $request->status;
        $orderHistoryData = [
            'status' => $status,
            'order_id' => $order->id
        ];


        if(OrderHistory::create($orderHistoryData)){
            $update_order = Order::where(['transaction_id'=>$request->id])->update($orderHistoryData);
            $status = ['status'=>'data saved'];
        }else{
            $status = ['status'=>'error when saving'];

        }

        return response()->json($status);
    }


    public function customer_orders(Request $request){
        $data['orders'] = Order::where('buyer_id','=',Auth::user()->id)->get();
        return view('pages.my_orders',$data);
    }


    public function customer_orders_view(Request $request){
        $data['order'] = $this->getByTransaction($request->id);
        return view('pages.my_orders_view',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
