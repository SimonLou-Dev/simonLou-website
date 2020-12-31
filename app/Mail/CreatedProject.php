<?php

namespace App\Mail;

use App\Models\project;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreatedProject extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param bool $CreateAccount
     * @param User $user
     * @param project $project
     */
    public $CreateAccount;
    public $user;
    public $project;
    public $password;
    public function __construct(bool $CreateAccount, User $user, project $project, string $password)
    {
        $this->project = $project;
        $this->user = $user;
        $this->CreateAccount = $CreateAccount;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.createproject')
                    ->from('no-reply@simon-lou.com')
                    ->with([
                        'account'=>$this->CreateAccount,
                        'user'=>$this->user,
                        'project'=>$this->project,
                        'password'=>$this->password,
                    ]);
    }
}
