<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    //
    
    public function item(){
        return $this->belongs('App\ItemImage','item_id');
    }
}
