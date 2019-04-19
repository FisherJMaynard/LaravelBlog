<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;;
use Carbon\Carbon;


class ContactController extends Controller
{
    function request(){
    	return view('contactRequest');
    }

function store(ContactRequest $request){
   $contact = new Contact;
   $contact->contact_name= $request['contact_name'];
   $contact->contact_email= $request['contact_email'];
   $contact->contact_message= $request['contact_message'];
   $contact->contact_date= Carbon::now();

   $contact->save();

   return view('contactResponse');
}

}
