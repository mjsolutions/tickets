<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm as ContactForm;

class MailController extends Controller
{
    public function contactForm(ContactFormRequest $request){

    	$form = $request->all();

    	Mail::to('martinalanis.dev@gmail.com', 'Martin Alanis')
			->send(new ContactForm($form));

		$response = true;

		return redirect()->route('contacto')->with('response', $response);

    }
}
