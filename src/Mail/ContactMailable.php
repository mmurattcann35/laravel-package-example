<?php

namespace Mmurattcann35\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message = null;
    public $name    = null;

    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }


    public function build()
    {
        $data = [

            "name" => $this->name,
            "message" => $this->message,
        ];

        return $this->markdown('contact::contact.email')->with($data);
    }
}
