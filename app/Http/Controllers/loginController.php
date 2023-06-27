<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Throwable;
use Validator;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        try {
           $request->validate([
            'email'=>'required',
            'password'=>'required'
           ]);
           $email = $request->email;
           $password = $request->password;

           if(auth()->attempt(['email'=>$email,'password'=>$password])){
         
              $user = User::where('email',$email)->first();
              Auth::login($user);
              if(auth()->user()->role === "admin"){
                return redirect('/index');
              }
             else{
                return redirect('/profile');
              }
           }
           else{
            return "Invalid Credientials";
           }    

        } catch (Throwable $e) {
            return "error";
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
