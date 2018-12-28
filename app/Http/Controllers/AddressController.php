<?php

namespace App\Http\Controllers;
   
use App\Address;
use App\User;
use Illuminate\Http\Request;
use Auth;

class AddressController extends Controller
{

	public function customer_save(Request $request){
		return $request->All();
	}

	public function customer_address(){
		
        $data['address'] = Address::with('user')->where('user_id','=',Auth::user()->id)->first();
		// print_r(json_encode($data['address']));
		return view('customers.address',$data);
	}

	public function update_address(Request $request){
		$user_id = Auth::user()->id;
		$AddressData = $request['Address'];

		//Update address 
		$saveAddress = Address::where('user_id','=',$user_id)
						->update($AddressData);

		//Update contact number
		$saveNumber = User::where('id','=',$user_id)
						->update($request['User']);

		if ($saveAddress) {
			return redirect()->back()->with(['status'=>'Data successfully updated']);
		}

	}

}