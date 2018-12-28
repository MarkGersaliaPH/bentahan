<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
class SuperModel extends Model
{
    //

    public function countStoreItems($id = null){
    	return Item::where('seller_id','=',$id)->count();
    }
}
