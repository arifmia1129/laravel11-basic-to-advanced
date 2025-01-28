<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index () {
        return view("contact");
    }

    function submit (Request $request) {

        $request->validate([
            'name'=> 'required|max:20|min:2',
            'email'=>'required|email'
        ], [
            'name.required'=> 'Name is must be required',
            'name.min'=> 'Name character must be at least 2 characters',
            'name.max'=> 'Name character must not be more than 20 characters',
            'email.required'=> 'Email is must be required',
            'email.email'=> 'Email must be a valid email format'
        ]);

        return response()->json($request);
    }
}
