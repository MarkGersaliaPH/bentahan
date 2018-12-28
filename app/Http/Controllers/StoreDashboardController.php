<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\SuperModel;
use App\Item;
use App\Store;
use App\ItemStatus;
use App\ItemImage;
use DB;
use Auth;
use File;
use Charts;

class StoreDashboardController extends Controller
{
    //

    public function index(){ 
 
            $data['pageTitle'] = 'Dashboard';
            $data['item_count'] = Item::where('seller_id','=',Auth::user()->id)->count();
            $data['order_count'] = Order::where('seller_id','=',Auth::user()->id)->count();
            // $orders = SuperModel::find(Auth::user()->id);
            // echo $orders; 
            // echo $myAccount;
            $data['store_details'] = Store::where('user_id','=',Auth::user()->id)->first();
            $data['nav_class'] = $data['pageTitle'];
            return view('stores.dashboard',$data);
    }

    public function my_account(){
            $data['pageTitle'] = 'My Account';
            $data['nav_class'] = $data['pageTitle'];

        return view('stores.my_account',$data);
    }

    public function items($status = null){

            if ($status == 'add'){ 
            }
            if ($status == null) {
                $data['toolbar_nav'] = 'all';
                $data['items'] = Item::where('seller_id','=',Auth::user()->id)
                ->where('status_id','!=',3)
                ->get();
            }elseif($status == 'out of stock'){
                $data['toolbar_nav'] = 'out of stock';
                $data['items'] = Item::where('seller_id','=',Auth::user()->id)
                ->where('stock','=',0)
                ->get();
            }
            else{
                $getStatus = ItemStatus::select('id')->where('display','=',$status)->first();         
                $getStatusId = $getStatus->id;         
                $data['toolbar_nav'] = $status;

                $data['items'] = Item::where('seller_id','=',Auth::user()->id)
                ->where('status_id','=',$getStatusId)
                ->get();
            }
            $data['pageTitle'] = 'Items';
            $data['nav_class'] = $data['pageTitle'];
            return view('stores.items',$data);
    }

    public function addItem(Request $request){

        if(!empty($request->All())){
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
        $item->price = $request->price;
        $item->brand = $request->brand;
        $item->stock = $request->stock; 
        
        $item->seller_id = Auth::user()->id;
        
        $item->save(); 
        if ($item->save()) {
            return redirect()->route('storeItems')->with(['status'=>'Data successfully added']);
        }

        }


        $data['pageTitle'] = 'Sell item';
        $data['nav_class'] = 'Items';
        return view('stores.sell',$data);
    }

   public function item_update(Request $request){

        if ($request->All() != null) {
            
        }else{

         $id = $request->id;

        
        $data['item'] = Item::find($id);
        $data['nav_class'] = 'Items';
        $data['pageTitle'] = 'Update '.$data['item']->title;
        return view('stores.item_update',$data);
        }
    }
 
        public function post_upload(){

        $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Response::make($validation->errors->first(), 400);
        }

        $file = Input::file('file');

        $extension = File::extension($file['name']);
        $directory = 'public/uploads/'.sha1(time());
        $filename = sha1(time().time()).".{$extension}";

        $upload_success = $file->storeAs('file', $directory, $filename);

        if( $upload_success ) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

   

   public function item_update_submit(Request $request){
        $category   = ['categories' => implode(' / ',$request->categories)];
        $items = array_merge($category,$request->data['Item']);
        Item::where('id','=',$request->id)->update($items);

        return redirect()->route('storeItems')->with(['status'=>'Data successfully updated']);
    }

   public function item_view($id){
        $data['item'] = Item::find($id);
        $data['pageTitle'] = 'View '.$data['item']['title'];
        $data['nav_class'] = 'Items';
        return view('stores.items.view',$data);
    }

   public function item_remove($id){
        $item = Item::find($id);
        $item->status_id = 3;
        $item->save();
        return redirect()->back()->with(['status'=>'Data successfully removed']);
    }

     public function item_sell($id){
        $item = Item::find($id);
        $item->status_id = 2;
        // exit();
        $item->save();
        return redirect()->back()->with(['status'=>'Data successfully updated']);
    }

    public function store_details(){
        $data['pageTitle'] = 'My Store';
        $data['data'] = Store::where('user_id','=',Auth::user()->id)->first();
        $data['nav_class'] = $data['pageTitle'];
        return view('stores.store_details',$data);
    }


    public function store_details_submit(Request $request){

        Store::where('user_id','=',Auth::user()->id)->update($request->data['Store']);
        User::where('id','=',Auth::user()->id)->update($request->data['User']);


        return redirect()->back()->with(['status'=>'Data successfully updated']);
    }

    public function check_password(Request $request){
        $encrypt = bcrypt($request->password);
        $is_correct = User::where('id','=',Auth::user()->id)->first(); 
        echo $is_correct->password . "<br>";
        echo $encrypt; 

    }

}