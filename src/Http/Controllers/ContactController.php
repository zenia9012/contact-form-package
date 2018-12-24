<?php

namespace Yevhenii\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yevhenii\Contact\Mail\ContactMailable;
use Yevhenii\Contact\Models\Contact;

class ContactController extends Controller
{
	public function index(  ) {
		return view('contact::contact');
    }

	public function store( Request $request ) {
		Contact::create($request->except('_token'));

		if (config('contact.send_email')){
			Mail::to(config('contact.send_email_to'))->send(new ContactMailable);
		}

		return back();
    }
}
