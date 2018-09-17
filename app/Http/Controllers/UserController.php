<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Auth;
use App\User;
class UserController extends Controller
{
    //

    public function update(Request $request){
        $name = $request->name;
        $email = $request->email;
        $photo = $request->photo;
        $photo = $photo->getClientOriginalName();
        $user = User::find(Auth::user()->id);
        $user->name = $name;
        $user->email = $email;
        $user->profile_picture = $photo;
        if($user->save()){
            $request->photo->storeAs('/public/uploads',$photo); 
            return redirect('/cms/myprofile');
        } else{
            echo 'Error';
        }
    }

    public function show(Request $request){
        echo $request->id;
    }

    public function customerCount(){
        $count = User::All()->count();
        return response()->json($count);
    }


}
