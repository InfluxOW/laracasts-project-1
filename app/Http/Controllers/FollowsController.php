<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        currentUser()->toggleFollow($user);

        $action = currentUser()->isFollowing($user) ? 'followed' : 'unfollowed';
        flash("You $action user @{$user->username}")->success();

        return back();
    }
}
