<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $users = User::with('avatar')->paginate(10);

        return view('explore.index', compact('users'));
    }
}
