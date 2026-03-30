<?php

namespace App\Http\Controllers\Auth\ActivationUser;

//use required devendancies

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserServices;
use Illuminate\Support\Str;

class ActivationController extends Controller
{
     protected $user_service; 

     //auto inject user service devendaciy

     public function __construct(UserServices $user_service){
          $this->user_service=$user_service;
     }

     //Active User Account

    public function activate_user(Request $request){

         $user_id=$request->query('id');
         $token=Str::random(100);

         $isActivated=$this->user_service->ActivateUserAccount($user_id,$token);

         if(!$isActivated){
              
                return redirect()->route('issuePage',['message'=>'Please try after 24 hours']);
         }

         return redirect()->route('login');
    }
}
