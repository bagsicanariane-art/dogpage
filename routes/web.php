<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('landing-page.home');
});
Route::get('/signin', function () {
    return view('landing-page.signin'); 
})->name('signin');
Route::get('/signup', function () {
    return view('landing-page.signup'); 
})->name('signup');

// User Dashboard
Route::get('/user-dashboard', function () {
    return view('user-dashboard.dashboard');
})->name('user-dashboard');

Route::get('/my-adoptions', function () {
    return view('user-dashboard.my-adoptions');
})->name('my-adoptions');

// Community Page
Route::get('/community', function () {
    return view('user-dashboard.community'); 
})->name('community');

Route::get('/dogadoptions', function () {
    return view('user-dashboard.dogadoptions');
})->name('dogadoptions');

