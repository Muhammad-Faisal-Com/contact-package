<?php

namespace Test\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Test\Contact\Mail\ContactMailable;
use Test\Contact\Model\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::welcom');
    }
    public function send(Request $request){
        Mail::to('faisalnazir036@gmail.com')->send(new ContactMailable($request->message));
        Contact::create($request->toArray());
    }

}
