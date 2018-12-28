<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    //
    protected $fillable = ['order_id', 'status', 'notes', 'customer_notified'];

    public function order(){
    	return $this->belongsTo('App\Order','id');
    }	

}
