<?php

namespace App\Providers\GlobalProvideData;

use Illuminate\Support\ServiceProvider;

class PrivideData extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('app.global',function(){
              $dayName=date('l');
              $currDate=date('Y-m-d');
              $monthName=date('F');
              $time=date('H:m:s');
              return [$dayName,$currDate,$monthName,$time];
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
