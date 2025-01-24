<?php

namespace App\Http\Controllers;

use App\Models\AllStudent;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index () {
        // // Retrieve all users from the database
        // $all_users = DB::table('users')->get();

        // $user_id = 1;

        // // Retrieve user by ID 
        // $user = DB::table('users')->where('id', $user_id)->first();

        // // Update user information by ID
        // // DB::table('users')->where('id', $user_id)->update([
        // //     'name'=> 'Arif',
        // //     'email'=> 'arif@example.com',
        // //     'password'=> bcrypt('password'),
        // // ]);

        // // $updated_user = DB::table('users')->where('id', $user_id)->first();

        // // Delete user information
        // // DB::table('users')->where('id', $user_id)->delete();

        // // Select user information
        // $users = DB::table('users')->pluck('email', 'id');


        // $max_age = DB::table('users')->max('age');
        // $min_age = DB::table('users')->min('age');
        // $average_age = DB::table('users')->avg('age');
        // $total_users = DB::table('users')->count();
        // $sum_age = DB::table('users')->sum('age');

        // $data = [
        //     'MAX_AGE' => $max_age,
        //     'MIN_AGE'=> $min_age,
        //     'AVG_AGE'=> $average_age,
        //     'totalUser'=> $total_users,
        //     'sumAge'=> $sum_age
        // ];

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Successfully aggregated user information',
        //     'data' => $data,
        // ]);


        // Eloquent ORM

        // $user = new User();

        // $user->name = 'Arif';
        // $user->email = 'me@arif.com';
        // $user->password = bcrypt('mepassword'); 
        // $user->age = 12.34;

        // $user->save();

        $users = User::all();

        // foreach($users as $user) {
        //     echo 'Name: ' . $user->name. ' ' . 'Email: ', $user->email;
        //     echo '<br>';
        // }

        // $user = User::where('id', 2)->first();
        // $user = User::find(2);

        // $user = User::where('id', 3)->first();
        $user = User::find(3);

        // $user->name = 'Arif';
        // $user->email = 'arif@gmail.com';

        // $user->save();

        // $user->delete();

        // $user =User::findOrFail(5);

        // $user->delete();

        $new_users = [
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'password' => bcrypt('johnpassword'),
            ],
            [
                'name'=> 'smith',
                'email'=> 'smith@gmail.com',
                'password'=> bcrypt('smith'),

            ],
            
        ];

        // User::insert($new_users);

        // $students = AllStudent::where(['id' => 2, 'student_id'=>'u'])->first();

        // $students = AllStudent::where('name', 'LIKE', '%Mrs.%')->orWhere('name', 'LIKE', '%Ms.%')->get();

        // $students = AllStudent::whereIn('id', [1,5, 6])->get();

        // $students = AllStudent::whereBetween('id', [1, 6])->get();

        $blogs = Blog::ActiveStatus()->get();

        return response()->json([
            'success' => true,
           'message' => 'Successfully retrieved blogs',
           'data' => $blogs,
        ]);
        
    }

    public function about () {
        return view('about.index');
    }
}
