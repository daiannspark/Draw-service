<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSent extends Mailable
{
    use Queueable, SerializesModels;

    private $fullname;

    private $email;

    private $questions;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $email, $questions)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->questions = $questions;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
        ->view('mails.contacts')->with([
                'fullname' => $this->fullname,
                'email' => $this->email,
                'questions' => $this->questions,
            ]);
    }
}
