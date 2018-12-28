<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class Address extends Model
{
    //

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_num', 'street', 'barangay','municipality','user_id'
    ];



    public function user(){ 
        return $this->belongsTo('App\User','user_id','id');
    }

    public function customer_address(){

        return $this->HasOne('App\User','user_id','id');
    }
}
