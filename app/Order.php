<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    // public function cart_info(){
    // 	return $this->hasOne('App\Cart','cart_id');
    // }


    public function item(){
    	return $this->belongsTo('App\Item','item_id');
    }	

    public function buyer_info(){
        return $this->belongsTo('App\User','buyer_id','id');
    }

    public function seller_info(){
        return $this->belongsTo('App\User','seller_id','id');
    }

    public function history(){
        return $this->hasMany('App\OrderHistory','order_id');
    }
}
