<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Compra extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.compra')
        // ->from('contacto@bolematico.mx', $this->form['name']) //aceptar cualquier mail aunque no exista
        ->from('ventas@bolematico.mx', 'Ventas Bolematico') //acepta solo mails que existen
        ->subject('Comprobante de compra | '.$this->data['evento']);
    }
}
