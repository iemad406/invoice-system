<?php

namespace App\Services;

//use required debendancies

use App\Models\Authen\RegisterNewUser;
use App\Models\UserActivate\Activation;
use Illuminate\Support\Facades\Hash;

class UserServices
{
        
    //Register new user

    public function create_new_user(array $userData){
          
                    $new_user = new RegisterNewUser();
                    $new_user->user_id=$this->generate_random_identifier();
                    $new_user->email=$userData['email'];
                    $new_user->user_name=$this->generate_random_identifier();
                    $new_user->password=Hash::make($userData['password']);
                    $new_user->user_account_date_created=date('Y-m-d');
                    $new_user->user_account_time_created=date('H:m:s');
                    $new_user->user_remember_token=null;
                    if($new_user->save()){
                        return [true,$new_user];
                    }
                    
                    return [false,""];
    }
    
    //check if the user is exist

    public function isExist(string $email) : bool{
      
             return RegisterNewUser::where('user_email','=',$email)->exists();
    }
    
    //Generate user identifier

    public function generate_random_identifier() : int{

        return mt_rand(100000, 999999);
    }

    //Activate User Account

    public function ActivateUserAccount(int $userID,string $token):bool{
              
               $activate=new Activation();
               $activate->activate_id=$this->generate_random_identifier();
               $activate->user_id=$userID;
               $activate->user_activation_token=$token;
               $activate->activate_date=date('Y-m-d');
               $activate->activate_time=date('H:m:s');
               $activate->user_status='active';
               $isActive=$activate->save(); 
               return $isActive;
    }
}
