<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function images(){
        return $this->hasMany('App\ItemImage','item_id');
    }

    public function seller(){
        return $this->belongsTo('App\User','seller_id');
    }

    public function status(){
        return $this->belongsTo('App\ItemStatus','status_id');
    }
}
