<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\MailUs;
use Illuminate\Support\Facades\Mail;

class ContactUs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected string $email;
    protected string $mail_subject;
    protected string $message;
    protected string $name;
    protected string $refrenceNumber;
    protected string $time;
    protected string $date; 
    
    public function __construct(string $email,string $mail_subject,string $message,string $name,string $refrenceNumber,string $time,string $date)
    {
          $this->email=$email;
          $this->mail_subject=$mail_subject;
          $this->message=$message;
          $this->name=$name;
          $this->refrenceNumber=$refrenceNumber;
          $this->time=$time;
          $this->date=$date;
    }

    public function handle(): void
    {
       Mail::to('ibrahimshakhatreh06@gmail.com')
            ->send(new MailUs(
                $this->email,
                $this->mail_subject,
                $this->message,
                $this->name,
                $this->refrenceNumber,
                $this->time,
                $this->date
            ));
    }
}
