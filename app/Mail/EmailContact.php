<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;
use Illuminate\Support\Facades\Storage;

class EmailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function build()
    {
        return $this->view('mails.emailContact')
        ->with(['name' => $this->name])
        ->with(['lastname' => $this->lastname])
;
    }
}
