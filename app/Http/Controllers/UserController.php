<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Auth;
use Hash;
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

    public function check_email(Request $request){
        $isNull = User::where('email','=',$request->email)->count();
        return $isNull;
    }

    public function customerCount(){
        $count = User::All()->count();
        return response()->json($count);
    }


    public function password(Request $request){

        // $user = User::find(Auth::user()->id);
        // if (Hash::check('passwordToCheck', $user->password)) {
        //     // Success
        // }

        return view('customers.change_password');
    }

    public function change_password(Request $request){

        $old =  $request->old;
        $new =  $request->new;
        $confirm =  $request->confirm;
        $user = User::find(Auth::user()->id);
        if (Hash::check($old, $user->password)) {
            // Success
            if ($new != $confirm) {
            $status = 'error';
            $msg = 'Password is not equal';
            return $this->redirectWithMessage($status,$msg);
            }else{
                $password_updated = $request->user()->fill([
                                    'password' => Hash::make($new)
                                        ])->save();
                if ($password_updated) {
                    
            $status = 'status';
            $msg = 'Password successfully updated';
            return $this->redirectWithMessage($status,$msg);
                }

            }
        }else{
            $status = 'error';
            $msg = 'Old password you provided is incorrect';
            return $this->redirectWithMessage($status,$msg);
        }
        
        return view('customers.change_password');
    }



    public function redirectWithMessage($status,$message){
            return redirect()->back()->with([$status=>$message]);

    }


}
