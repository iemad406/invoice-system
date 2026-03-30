<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SentUserActivationMail;
use App\Models\Authen\RegisterNewUser;

class SentMailToUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    

    protected string $url;
    
    protected RegisterNewUser $user;

    public function __construct(RegisterNewUser $user,string $url)
    {
        $this->user=$user;
        $this->url=$url;
    }

    public function handle(): void
    {
        Mail::to($this->user->user_email)
            ->queue(new SentUserActivationMail($this->user,$this->url));
    }
}
