<?php


namespace Mmurattcann35\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Mmurattcann35\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mmurattcann35\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view("contact::contact");
    }

    public function send(Request $request){

        Mail::to(config("contact.mail_to"))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect()->route("contact");
    }
}
