<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminDetail extends Model
{
    //

    public function addedBy(){
        return $this->belongsTo('App\User','added_by');
    }
}
