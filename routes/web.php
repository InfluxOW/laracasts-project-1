<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::resource('tweets', 'TweetsController')->only('store', 'index');
    Route::resource('profiles', 'ProfilesController')->only('show', 'edit', 'update')->parameters([
        'profiles' => 'user:username'
    ]);
    Route::resource('profiles.follow', 'FollowsController')->only('store')->parameters([
        'profiles' => 'user:username'
    ]);
});

Auth::routes();
