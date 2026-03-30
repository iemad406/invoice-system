<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use App\Models\Authen\RegisterNewUser;

class SentUserActivationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    protected RegisterNewUser $user;

    protected string $url; 

    public function __construct(RegisterNewUser $user,string $url)
    {
        $this->user=$user;
        $this->url=$url;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            replyTo : [new Address($this->user->user_email, '')],
            subject: 'Activation Email',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.activate',
            with:[
               'user_email'=>$this->user->user_name,
               'url'=>$this->url 
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
