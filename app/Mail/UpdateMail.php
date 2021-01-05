<?php

namespace App\Mail;

use App\Models\project;
use App\Models\project_updates;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $project;
    public $update;

    public function __construct(User $user, project $project, project_updates $update)
    {
        $this->project = $project;
        $this->user = $user;
        $this->update = $update;



    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.project_update')
            ->from('no-reply@simon-lou.com')
            ->with([
                'user'=>$this->user,
                'project'=>$this->project,
                'maj'=> $this->update,
            ])->subject('Nouvelle mise à jour');
    }
}
