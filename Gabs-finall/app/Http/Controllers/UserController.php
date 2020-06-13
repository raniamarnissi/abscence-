<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\User;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Image;

class UserController extends Controller
{
    public function affiche()
    {
     
        return   User::all()->where('role',"teacher");
    }

    public function profile(){
        return view('profile', array('user' => Auth::user()));
    }

    public function update_image(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/images/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile' , array('user' => Auth::user()));
    }
}