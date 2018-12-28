<?php

namespace App\Http\Controllers;

use App\Store;
use App\Item;
use App\User;
use Auth;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    
    public function count(){
        $count = User::where('type','=',3)->count();
        return response()->json($count);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

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
        $random = 'asdasd';
        $password = ['password'=>bcrypt($random)];
 
        $userArray = array_merge($request['User'], $password); 
        $file = $request['upload_file'];

        $filename = $file->getClientOriginalName();  
 
     
        if(User::create($userArray)){ 
            $user_id = User::select('id')->where('email','=',$request['User']['email'])->orderBy('id','DESC')->first();
            $user_id = $user_id->id;
            $store = new Store();
            $store->store_name = $request['Store']['store_name']; 
            $store->slug = str_slug($request['Store']['store_name']);
            $store->user_id = $user_id;
            $store->logo = $filename;
            $request->upload_file->storeAs('/public/uploads',$filename);

            if($store->save()){
                return redirect('/admin/stores');
            }else{
                echo 'Not save';
            }
            

        }  
         

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // 
        $id = $request->id;
        $data['data'] = Store::where('user_id','=',$id)->first();
        $data['items'] = Item::where('seller_id','=',$id)->get();
        // echo $data;
        return view('pages.store_view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }

    public function store_update_logo(Request $request){
        $file = $request['logo']; 
        $filename = $file->getClientOriginalName();   
        $request->logo->storeAs('/public/uploads/',$filename);


        $update = Store::where('user_id','=',Auth::user()->id)->update(['logo'=>$filename]);
        if($update){
            echo "Success";
        }else{
            echo "ERROR";
        }
        return redirect()->back();
    }



    public function store_update_banner(Request $request){
        $file = $request['banner']; 
        $filename = $file->getClientOriginalName();   
        $request->banner->storeAs('/public/uploads',$filename);


        $update = Store::where('user_id','=',Auth::user()->id)->update(['banner'=>$filename]);
        if($update){
            echo "Success";
        }else{
            echo "ERROR";
        }
        return redirect()->back();
    }



    /**
     * Vendor sell items functions only the vendor with account can access this.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function itemSell(Store $store)
    {
        //
        $pageTitle = 'Sell item';
        return view('stores.sell',['pageTitle' => $pageTitle]);
    }
}
