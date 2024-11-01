<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class formSubmited extends Mailable
{
    use Queueable, SerializesModels;
    public $customer_name;
    public $customer_phone;
    public $customer_message;
    /**
     * Create a new message instance.
     */
    public  function  __construct ($name, $phone ,$message)  
    { 
        $this->customer_name = $name;
        $this->customer_phone = $phone;
        $this->customer_message = $message;        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Form Submited',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.Form_Submited',
        );
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
