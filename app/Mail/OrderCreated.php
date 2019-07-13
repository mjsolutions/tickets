<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $expires_at;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $expires_at)
    {
        $this->order = $order;
        $this->expires_at = $expires_at;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order-created')
                    ->from('ventas@bolematico.com', 'Ventas Bolematico') //acepta solo mails que existen
                    ->subject('Orden de pago');
    }
}
