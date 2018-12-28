<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{

	public function byCategory(Request $request){

        $category = $request->category;
        $data['query'] = $category ;
        $data['result_count'] = Item::countByCategory($category);
        $data['items'] = Item::where('categories','like','%'.$category.'%')->get();
        
        return view('pages.categories',$data);
	}
}