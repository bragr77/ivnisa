<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SolcitudRecibida extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Fue creada na nueva solicitud de credito a traves de la pagina inversionesnisa.com';

    public $datosemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosemail)
    {
        $this->datosemail = $datosemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.solicitud-recibida');
    }
}
