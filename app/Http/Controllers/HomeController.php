<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () {
        // Retrieve all users from the database
        $all_users = DB::table('users')->get();

        $user_id = 1;

        // Retrieve user by ID 
        $user = DB::table('users')->where('id', $user_id)->first();

        // Update user information by ID
        // DB::table('users')->where('id', $user_id)->update([
        //     'name'=> 'Arif',
        //     'email'=> 'arif@example.com',
        //     'password'=> bcrypt('password'),
        // ]);

        // $updated_user = DB::table('users')->where('id', $user_id)->first();

        // Delete user information
        DB::table('users')->where('id', $user_id)->delete();


        return response()->json([
            'success' => true,
            'message' => 'Successfully deleted user information',
            'data' => $user,
        ]);
        
    }

    public function about () {
        return view('about.index');
    }
}
