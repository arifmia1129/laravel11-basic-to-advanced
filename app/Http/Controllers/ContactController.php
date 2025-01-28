<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index () {
        return view("contact");
    }

    function submit (ContactStoreRequest $request) {

        return response()->json($request);
    }
}
