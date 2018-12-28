<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function images(){
        return $this->hasMany('App\ItemImage','item_id');
    }

    public function reviews(){
        return $this->hasMany('App\ItemReview','item_id','id')->orderBy('id','DESC');
    }

    public function total_review(){
    }

    public function seller(){
        return $this->belongsTo('App\User','seller_id');
    }

    public function status(){
        return $this->belongsTo('App\ItemStatus','status_id');
    }

    public function cart(){
        return $this->belongsTo('App\Cart','item_id'); 
    }

    public static function countByCategory($category){
        return Item::where('categories','like','%'.$category.'%')->count();
    }

    public static function countByBrand($category){
        return Item::where('brand','=',$category)->count();
    }
}
