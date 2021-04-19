<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $rejected;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$rejected)
    {
        $this->details = $details;
        $this->rejected = $rejected;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail From Ride-pool')->view('emails.mail');
    }
}
