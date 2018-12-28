<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemReview extends Model
{
    //

    protected $fillable = ['rating','item_id','comment','user_id'];

    public function item(){
    	return $this->hasOne('App\Item','item_id');
    }

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function reviews_count($item_id){
    	return ItemReview::where('item_id','=',$item_id)->count();
    }

    public static function reviews_count2($item_id){
    	return ItemReview::where('item_id','=',$item_id)->count();
    }

    public static function getTotalRatings2($item_id){
        
            $a = ItemReview::getByRatingCount2(1,$item_id);
            $b = ItemReview::getByRatingCount2(2,$item_id);
            $c = ItemReview::getByRatingCount2(3,$item_id);
            $d = ItemReview::getByRatingCount2(4,$item_id);
            $e = ItemReview::getByRatingCount2(5,$item_id);
            $total_rate = 0;
            $mult = $a * 1 + $b * 2 + $c * 3 + $d * 4 + $e * 5;
            $total = $a + $b + $c + $d + $e;

            if (!empty($mult) && !empty($total)) {
		        $total_rate = ($mult) / ($total);
            }
        
        return number_format($total_rate,1);
    }

    public function getTotalRatings($item_id){
        
            $a = $this->getByRatingCount(1,$item_id);
            $b = $this->getByRatingCount(2,$item_id);
            $c = $this->getByRatingCount(3,$item_id);
            $d = $this->getByRatingCount(4,$item_id);
            $e = $this->getByRatingCount(5,$item_id);
            $total_rate = 0;
            $mult = $a * 1 + $b * 2 + $c * 3 + $d * 4 + $e * 5;
            $total = $a + $b + $c + $d + $e;

            if (!empty($mult) && !empty($total)) {
		        $total_rate = ($mult) / ($total);
            }
        
        return number_format($total_rate,1);
    }


    public function getByRatingCount($count,$item_id){
        $data = ItemReview::where('item_id','=',$item_id)->where('rating','=',$count)->count();
        return $data;
    }
    public static function getByRatingCount2($count,$item_id){
        $data = ItemReview::where('item_id','=',$item_id)->where('rating','=',$count)->count();
        return $data;
    }

}
