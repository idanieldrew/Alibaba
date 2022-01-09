<?php

namespace Module\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Module\User\Entity\User;

class UserRegisterMail extends Mailable
{
    use Queueable,SerializesModels;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('Mail/register-user',[
            'name' => $this->user->name
        ]);
    }

}