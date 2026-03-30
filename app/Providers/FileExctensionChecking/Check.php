<?php

namespace App\Providers\FileExctensionChecking;

//use required devendancies

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;

class Check extends ServiceProvider
{
    
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
          Validator::extend('check_file_extension',function($attribute, $value, $parameters){
                     
                     $extenstion=strtolower($value->extension());
                     return in_array($extenstion,$parameters);
          });

          Validator::replacer('check_file_extension',function($message, $attribute, $rule, $parameters){
                  
                  $showedMessage="The $attribute must be a file of type: " . implode(', ', $parameters);
                  return $showedMessage;
          });
    }
}
