<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function addedBy(){ 
        return $this->belongsTo('App\User','added_by');
    }
}
