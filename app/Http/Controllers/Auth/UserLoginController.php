<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login(Request $request){
          
             $user_email=$request->input('user_email');
             $user_password=$request->input('user_password');
             if ($this->isEmpty($user_email)) {
                  return back()->with('error', 'The email is empty');
            }

            if ($this->isEmpty($user_password)) {
                  return back()->with('error', 'The password is empty');
            }
            $credentials=[
                'email'=>$user_email,
                'password'=>$user_password
            ];
            
           
           if(Auth::guard('auth_user')->attempt($credentials)){
                 
                     $request->session()->regenerate();
                     return redirect()->route('invoice');
           }else{
               return redirect()
                      ->back()
                      ->with('error','invalid credentials');
           }
    }
    public function isEmpty(mixed $data){
        
        return empty($data);
    }
}
