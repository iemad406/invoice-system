<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GenerateRandomIdentifier extends ServiceProvider
{
   
    public function register(): void
    {
        $this->app->bind('app.random_number',function(){
              return $this->generateRandomNumber();
        });
    }
    
    private function generateRandomNumber() : int {
        return mt_rand(100000, 999999);
    }

    public function boot(): void
    {
        
    }
}
