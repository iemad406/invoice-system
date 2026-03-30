<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class MailUs extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected string $email;
    protected string $mail_subject;
    protected string $mail_message;
    protected string $name;
    protected string $refrenceNumber;
    protected string $time;
    protected string $date; 
    
    public function __construct(string $email,string $mail_subject,string $mail_message,string $name,string $refrenceNumber,string $time,string $date)
    {
          $this->email=$email;
          $this->mail_subject=$mail_subject;
          $this->mail_message=$mail_message;
          $this->name=$name;
          $this->refrenceNumber=$refrenceNumber;
          $this->time=$time;
          $this->date=$date;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email,$this->name),
            subject: $this->mail_subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with:[
                'mail_subject'=>$this->mail_subject,
                'email'=>$this->email,
                'mail_message'=>$this->mail_message,
                'refrence_number'=>$this->refrenceNumber,
                'name'=>$this->name,
                'time'=>$this->time,
                'date'=>$this->date
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
