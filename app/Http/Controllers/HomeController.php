<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Order;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data['items'] = Item::with('reviews')->where('status_id','=',2)->get();
            $data['hot_item'] = Order::with('item')
            ->orderBy('quantity','DESC')
            ->first();
            $data['best_sellers'] = Order::with('item')
            ->orderBy('quantity','DESC')
            ->get();

    // return view('template.index',['items'=>$items]);
    // return view('',['items'=>$items]);
        return view('pages.index',$data);
    }

    public function cusomer_account_info(){
        return view('customers.account_info');
    }

    public function update_account_info(Request $request){

        $email = $request['User']['email'];

        $emailExist = User::where('id','!=',Auth::user()->id)
                        ->where('email','=',$email)
                        ->count();

        if ($emailExist) {
            $status = 'error';
            $message = 'The email '.$email.' is already in use by another user please try again';
            return $this->redirectWithMessage($status,$message);
        }
        $success = User::where('id','=',Auth::user()->id)
                    ->update($request['User']);

        if ($success) {
            $status = 'success';
            $message = 'Data successfully saved';
            return $this->redirectWithMessage($status,$message);
        }

    }

    public function redirectWithMessage($status,$message){
            return redirect()->back()->with([$status=>$message]);

    }

    public function update_profile_pic(Request $request){
        $file = $request['photo']; 
        $filename = Auth::user()->id.'profile_pic.png'; 

        $request->photo->storeAs('/public/uploads/',$filename);


        $update = User::where('id','=',Auth::user()->id)->update(['profile_picture'=>$filename]);
        if($update){
            echo "Success";
        }else{
            echo "ERROR";
        }
        return redirect()->back();
    }
}
