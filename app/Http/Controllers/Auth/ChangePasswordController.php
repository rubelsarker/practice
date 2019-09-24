<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function create(){
        return view('auth.passwords.change');

    }
    public function update(Request $request){
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
       $haspassword = Auth::user()->password;
       if(Hash::check($request->old_password,$haspassword)){
           $user = User::find(Auth::id());
           $user->password = Hash::make( $request->password);
           $user->save();
           session()->flash('message','Password Change Successfully !!');
           Auth::logout();
           return redirect()->back();
       }else{
           session()->flash('message','Password does not match old password !!');
           return redirect()->back();
       }


    }
}
