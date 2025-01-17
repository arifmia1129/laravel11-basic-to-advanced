<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () {
        // Retrieve all users from the database
        $all_users = DB::table('users')->get();

        // Retrieve user by ID 
        $user = DB::table('users')->where('id', 1)->first();

        return response()->json([
            'success' => true,
            'message' => 'Successfully retrieved user information',
            'data' => $user,
        ]);
        
    }

    public function about () {
        return view('about.index');
    }
}
