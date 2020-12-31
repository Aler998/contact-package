<?php

namespace Aler\Contact\Http\Controllers;

use Aler\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Aler\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }

    public function store(Request $request) {
        //return $request->all();

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable( $request->message , $request->name , $request->email ));

        Contact::create($request->all());

        return redirect(route('contact'));
    }
}
