<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetValidation;
use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tweets = $request->user()->timeline();

        return view('tweets.index', compact('tweets'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TweetValidation $request)
    {
        $tweet = $request->user()->tweets()->create($request->only(['body']));

        return redirect()->route('tweets.index');
    }

    public function like(Tweet $tweet)
    {
        $tweet->like(currentUser());

        return back();
    }

    public function dislike(Tweet $tweet)
    {
        $tweet->dislike(currentUser());

        return back();
    }
}
