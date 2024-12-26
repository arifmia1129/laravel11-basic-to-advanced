<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


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