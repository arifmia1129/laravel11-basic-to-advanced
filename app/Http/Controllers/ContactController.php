<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index () {
        return view("contact");
    }

    function submit (ContactStoreRequest $request) {

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return response()->json([
            'success' => true,
            'message'=> 'Successfully submitted contact',
            'data'=> $contact,
        ]);
    }
}
