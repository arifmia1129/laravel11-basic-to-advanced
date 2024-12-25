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