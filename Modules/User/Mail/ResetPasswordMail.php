<?php

namespace Module\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable,SerializesModels;

    protected $token;

    public function __construct($token)
    {
        $this->$token = $token;
    }

    public function build()
    {
        return $this->view('Mail/reset-password',[
            'token' => $this->token
        ]);
    }
}