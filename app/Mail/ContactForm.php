<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    //Variables publicas son visibles en las vistas sin necesidad de pasarlas como parametros
    //Variables privadas o protected se deben pasar mediante el metodo with a la vista
    //Form es un array, no usar -> (anotacion de object) sino usar $form[] (anotacion de array)
    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        //
        $this->form = $form;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->form);
        return $this->view('emails.contactform')
            // ->from($form->email, $form->name)
            // ->subject($form->subject);
        ->from($this->form['email'], $this->form['email'])
        ->subject('WebForm Bolematico | '.$this->form['subject']);
    }
}
