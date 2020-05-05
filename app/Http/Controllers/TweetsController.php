<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetValidation;
use App\Image;
use App\Services\UploadService;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TweetsController extends Controller
{
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

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

        $this->uploadService->handle($request, $tweet, 'image');

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
