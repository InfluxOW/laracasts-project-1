<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tweets = $request->user()->timeline();

        return view('home', compact('tweets'));
    }
}
