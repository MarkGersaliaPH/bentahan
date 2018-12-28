<?php

namespace App\Http\Controllers;

use App\ItemReview;
use Illuminate\Http\Request;
use Auth;

class ItemReviewController extends Controller
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
    public function create(Request $request)
    {
        //
        $data = [
            'rating'=>$request->star,
            'comment'=>$request->comment,
            'user_id'=>Auth::user()->id,
            'item_id'=>$request->item_id
        ];

        $save = ItemReview::create($data);
        if($save){
            return redirect()->back();
        }else{
            die('Error while saving');
        }
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
     * @param  \App\ItemReview  $itemReview
     * @return \Illuminate\Http\Response
     */
    public function show(ItemReview $itemReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemReview  $itemReview
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemReview $itemReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemReview  $itemReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemReview $itemReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemReview  $itemReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemReview $itemReview)
    {
        //
    }
}
