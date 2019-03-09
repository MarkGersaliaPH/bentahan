<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model 
{
    //

    protected $fillable = ['status', 'quantity', 'session_id', 'item_id'];

    public function item(){
    	return $this->belongsTo('App\Item','item_id','id');
    }	

}
