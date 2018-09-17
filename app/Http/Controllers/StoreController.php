<?php

namespace App\Http\Controllers;

use App\Store;
use App\User;
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
    public function show(Store $store)
    {
        //
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
}
