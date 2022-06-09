<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Template extends Mailable
{
    use Queueable, SerializesModels;
    public  $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template)
    {

        $this->template= $template;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->template->subject)->view('crm.email_format')->with('template', $this->template);
    }
}
