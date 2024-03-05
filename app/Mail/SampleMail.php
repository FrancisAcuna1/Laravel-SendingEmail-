<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $mailData;
   
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
      
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sample Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email-page',
        );
    }

    public function build()
    {
        $mail_sending = $this->View('email-page')
            -> subject('Sample Mail');

        if ($this->mailData['file']){
            $mail_sending->attach($this->mailData['file']->getRealPath(),[
                'as' => $this->mailData['file']->getClientOriginalName(),
                'mime' => $this->mailData['file']->getMimeType()
            ]);
        }
        
        return $mail_sending;
    }



    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    
    } 
}
