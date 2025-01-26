<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index () {
        return view("contact");
    }

    function submit (Request $request) {
        return response()->json($request);
    }
}
