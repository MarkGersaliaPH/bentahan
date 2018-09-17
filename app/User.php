<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact_number','address','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function item(){
        return $this->belongsTo('App\Item','seller');
    }

    public function billingAddress(){
        return $this->HasOne('App\BillingAddress','user_id');
    }

    public function store(){ 
        return $this->HasOne('App\Store','user_id');
    }

    public function adminDetails(){
        return $this->HasOne('App\AdminDetail','user_id');
    }



}
