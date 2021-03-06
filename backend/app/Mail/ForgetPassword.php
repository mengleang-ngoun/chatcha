<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $userID;
    private $username;
    public function __construct($userID, $username)
    {
        //
        $this->userID = $userID;
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.auth.forget_password', [
            'url' => URL::temporarySignedRoute('forget_password_handler', now()->addMinute(15) ,['user' => $this->userID]),
            'username' => $this->username
        ]);
    }
}
