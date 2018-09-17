<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    //
    
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    public function user(){
        return $this->HasOne('App\User','user_id');
    }
}
