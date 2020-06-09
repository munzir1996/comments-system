<?php

Route::livewire('/', 'home')->name('home')->middleware('auth');

Route::group(['middleware' => 'guest'], function () {
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/register', 'register')->name('register');
});


// use Illuminate\Support\Facades\Route;
// use App\Comment;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });
