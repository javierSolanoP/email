<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Agotamiento de inventario.';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $user, public $product, public $enterprise)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email', ['user' => $this->user, 'product' => $this->product, 'enterprise' => $this->enterprise]);
    }
}
