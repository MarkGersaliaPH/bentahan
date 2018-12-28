<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemReview;
use App\User;
use App\ItemImage;
use App\Store;
use Auth;
use helpers;
use DB;  
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function count(){
        $count = Item::All()->count();
        return response()->json($count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "TEST TEST";
        
    }
    
    public function search(Request $request){
        $query = Input::get('query'); 

        $data = Item::where('title','like','%'.$query.'%')->get();
        // return View::make('folder.myFile')->with('data',$data);
        // $data = Item::like('title',$query)->get(); 
        return view('pages.items.search')->with(['query'=>$query,'items'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $count = 0;
        foreach($request->upload_file as $file){
            $item_id = Item::select('id')->orderBy('id','DESC')->first(); 
            $filename = $file->getClientOriginalName();
            if($item_id != null){ 
                $item_id = $item_id->id;
                $item_id = $item_id + 1;
            }else{
                $item_id = 1;
            }
            $filename = 'item_'.$item_id.'_image'.$filename;
            $itemImage = new ItemImage();
            $itemImage->item_id = $item_id;
            $itemImage->filename = $filename; 
            $itemImage->save();  
            $request->upload_file[$count]->storeAs('/public/uploads',$filename); 
            $count ++;
        }

        $item = new Item();
        $category   = implode(' / ',$request->categories);
        $item->categories = $category;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->specifications = $request->specifications;
        $item->conditions = $request->conditions;
        $item->price = $request->price;
        $item->quantity = $request->quantity; 
        
        if(Auth::user() == NULL){ 
            
            $arr = $request->data['User'];
            $pass = ['password'=>bcrypt($request->data['password'])];
            $userArray = array_merge($arr, $pass); 

            User::create($userArray);  
            $user_id = User::select('id')->orderBy('id','DESC')->first();
            $item->seller_id = $seller_id->id;  

            //Get store details from form
            $storename = $request->data['Store']['store_name'];
            $user_id = $seller_id->id;  
            $slug = str_slug($storename);

            //Saving store details
            $store = new Store();
            $store->store_name = $storename; 
            $store->slug = $slug;

            $store->user_id = $user_id;
        $store->save();

        }else{
            $user_id = Auth::user()->id;  
        }
        $item->seller_id = $user_id;
        
        $item->save(); 

        return redirect('/');
        
    }

    public function register(){
        echo 'Register';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $reviews = new ItemReview();

        $id = $request->id; 

        $data['rating'] = $reviews->getTotalRatings($id);
        $data['reviews_count'] = $reviews->reviews_count($id);
        // 
        $data['item'] = Item::find($id);  
        $data['mightAlsoLike'] = Item::limit(3)->get();
        // echo $id;
        return view('pages.product_view',$data);
    }

  

    public function restock($id){
        return Item::find($id);
    }

    public function updateStock(Request $request){
        
        $items = Item::find($request->id);
        $newStock = $items->stock + $request->new_stock;
        // echo $newStock;
        $items->stock = $newStock;
        if($items->save()){
            echo "Success";
        }else{
            echo "Not success";
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function store_update(Request $request, Item $item)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
