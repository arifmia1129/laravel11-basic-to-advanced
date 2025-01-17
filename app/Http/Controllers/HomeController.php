<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () {

        $all_users = DB::table('users')->get();

        return response()->json([
            'success' => true,
            'message' => 'Successfully retrieved all users information',
            'data' => $all_users,
        ]);
        
    }

    public function about () {
        return view('about.index');
    }
}
