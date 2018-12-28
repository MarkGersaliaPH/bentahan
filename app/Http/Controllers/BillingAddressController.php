<?php

namespace App\Http\Controllers;
   
use App\Address;
use Illuminate\Http\Request;
use Auth;

class AddressController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $unit = $request->unit_room_floor_no;
        $building = $request->building;
        $house_building_no = $request->house_building_no;
        $subdivision_village = $request->subdivision_village;
        $province = $request->province;
        $city_municipality = $request->city_municipality;
        $barangay = $request->barangay;
        $zip = $request->zip;
        $street = $request->street;
        $id = $request->id;


        if (BillingAddress::where('user_id', '=', $id)->exists()) {
            // // user found 
            $billing = BillingAddress::find($id);  
            // echo "THIS SHOULD BE UPDATED";
         }else{
            $billing = new BillingAddress();
         }
        $billing->unit_room_floor = $unit;
        $billing->building_name = $building;
        $billing->house_building_no = $house_building_no;
        $billing->subdivision_village = $subdivision_village;
        $billing->province = $province;
        $billing->city_municipality = $city_municipality;
        $billing->barangay = $barangay;
        $billing->street = $street;
        $billing->user_id = $id;
        $billing->zip_code = $zip;
        // echo Auth::user();

        $billing->save();
         $status = 'Data successfully saved';
        return response()->json($status);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function show(BillingAddress $billingAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingAddress $billingAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillingAddress $billingAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BillingAddress  $billingAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingAddress $billingAddress)
    {
        //
    }
}
