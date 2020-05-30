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

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::resource('tweets', 'TweetsController')->only('store', 'index', 'destroy');
    Route::post('/tweets/{tweet}/like', 'TweetsController@like')->name('tweets.like');
    Route::post('/tweets/{tweet}/dislike', 'TweetsController@dislike')->name('tweets.dislike');

    Route::post('/upload', 'UploadsController@store')->name('upload');

    Route::resource('profiles', 'ProfilesController')->only('show', 'edit', 'update')->parameters([
        'profiles' => 'user:username'
    ]);

    Route::resource('profiles.follow', 'FollowsController')->only('store')->parameters([
        'profiles' => 'user:username'
    ]);

    Route::get('notifications', 'UserNotificationsController@show')->name('notifications');

    Route::resource('explore', 'ExploreController')->only('index');
});

Auth::routes();
Route::get('login/github', 'Auth\Social\GithubController@redirectToProvider')->name('github.login');
Route::get('login/github/callback', 'Auth\Social\GithubController@handleProviderCallback')->name('github.callback');
