<?php

namespace App\Http\Controllers\Auth;

//use debendancies
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidationData;
use App\Services\UserServices;
use App\Jobs\SentMailToUser;

class RegisterController extends Controller
{    
     protected $user_service; 

     //auto inject user service devendaciy

     public function __construct(UserServices $user_service){
          $this->user_service=$user_service;
     }

     //create new user

     public function registerNewUser(UserValidationData $request){
              
          $validated_data=$request->validated();
          $user_data=[
               'email'=>$validated_data['email'],
               'password'=>$validated_data['password']
          ];

          $isUserExist=$this->user_service->isExist($user_data['email']);

          if($isUserExist){
               $email=$user_data['email'];
               return redirect()->back()->with('error',"The user with this email $email is already in use");
          }

          try{
              $isCreated=$this->user_service->create_new_user($user_data);
              if(!$isCreated[0]){
                     redirect()->back()->with('error','The user is not created');
              }
              
              $user=$isCreated[1];
              $url=url('/activate?id='.$user->user_id);
              SentMailToUser::dispatch($user,$url);
              return redirect()->back();
          }catch(Exception $e){
               redirect()->back()->with('error',$e->getMessage());
          }
     }
}
