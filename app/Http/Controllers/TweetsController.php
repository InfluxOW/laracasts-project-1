<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetValidation;
use App\Notifications\NewTweet;
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

        $tweet->user->followers()->get()->map(function ($user) use ($tweet) {
            return $user->notify(new NewTweet($tweet));
        });

        flash('New tweet has been added!')->success();

        return redirect()->route('tweets.index');
    }

    public function destroy(Tweet $tweet)
    {
        $this->authorize($tweet);

        $tweet->delete();

        flash(__("Tweet has been deleted!"))->success();

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

        return redirect()->route('tweets.index');
    }
}
