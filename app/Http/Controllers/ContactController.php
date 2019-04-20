<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;;
use Carbon\Carbon;


class ContactController extends Controller
{
<<<<<<< HEAD
=======
    // return the view with the form
>>>>>>> 37909b7ae22790cd1a81f376ddd83f9fc2ed03b3
    function request(){
    	return view('contactRequest');
    }

<<<<<<< HEAD
=======
    // after verifications(with ContactRequest), store the data in the DB
    // and redirect to contactResponse view
>>>>>>> 37909b7ae22790cd1a81f376ddd83f9fc2ed03b3
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
