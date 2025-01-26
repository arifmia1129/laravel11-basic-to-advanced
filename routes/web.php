<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::get('/about', function () {
    return 'Welcome to learning Laravel';
})->name('about.me');


Route::get('/user/{id}/{role}', function ($id, $role) {
    return 'User id is: ' . $id . ' and role is: ' . $role;
})->name('user.details');


Route::group(['prefix'=> 'blog', 'as'=>'blog.'], function (){
    Route::get('/create', function() {
        return 'Create blog post';
    })->name('createBlog');

    Route::get('/edit/{id}', function($id) {
        return 'Edit blog post with id: '. $id;
    })->name('edit');

    Route::get('/delete/{id}', function($id) {
        return 'Delete blog post with id: '. $id;
    })->name('delete');
});


// Route methods

/**
 * Get -> Getting data from database
 * Post -> Insert data into database
 * Put -> Update data for whole row
 * Patch -> Update data for specific column in row
 * Delete -> Delete data from database
*/

// Example of Route methods


// Get method
// Route::get('/users', function () {
//     return;
// });

// // Post method
// Route::post('/users', function () {
//     // Insert data into database
//     $user =[
//         'name' => request('name'),
//         'email' => request('email'),
//         'password' => bcrypt(request('password')),
//     ];
//     $user->name = request('name');
//     $user->email = request('email');
//     $user->password = bcrypt(request('password'));
//     $user->save();

//     return redirect()->route('users.index');
// });


// // Put method
// Route::put('/users/{id}', function ($id) {
//     $user = User::find($id);
//     $user->name = request('name');
//     $user->email = request('email');
//     $user->password = bcrypt(request('password'));
//     $user->save();

//     return redirect()->route('users.index');
// });


// // Patch method
// Route::patch('/users/{id}', function ($id) {
//     $user = User::find($id);
//     $user->update([
//         'name' => request('name'),
//         'email' => request('email'),
//         'password' => bcrypt(request('password')),
//     ]);

//     return redirect()->route('users.index');
// });


// // Delete method
// Route::delete('/users/{id}', function ($id) {
//     $user = User::find($id);
//     $user->delete();

//     return redirect()->route('users.index');
// });


Route::get('/contact/{country}', function ($country){
    
    $all_emails = [
        'bangladesh' => 'contact@bangladesh.com',
        'indonesia' => 'contact@indonesia.com',
        'usa' => 'contact@usa.com',
    ];

    $available_countries = [
        'bangladesh',
        'indonesia',
        'usa',
        'japan',
        'china',
        'korea',
        'russia',
        'germany',
        'australia',
    ];

    return view('contact.index', ['country' => $country, 'all_emails' => $all_emails, 'available_countries' => $available_countries]);
});

Route::get('/about', [HomeController::class, 'about']);


Route::get('/single-action', SingleActionController::class);


Route::resource('/blog', BlogController::class);

Route::get('/student', [StudentController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// Fallback route

Route::fallback(function () {
    return 'Ups! Search results are not available';
});

