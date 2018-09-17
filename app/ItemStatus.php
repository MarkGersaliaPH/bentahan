<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemStatus extends Model
{
    //
    public function item(){
        return $this->belongsTo('App\Item','id');
    }
}
