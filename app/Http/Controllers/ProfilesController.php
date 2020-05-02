<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user, UserValidation $request)
    {
        $user->update($request->only('name', 'username', 'email', 'description'));

        if ($request->hasFile('avatar')) {
            $path = Storage::disk('s3')->put("avatars", $request->file('avatar'), 'public');

            if ($user->avatar_url) {
                Storage::disk('s3')->delete(parse_url($user->avatar_url, PHP_URL_PATH));
            }

            $user->update([
                'avatar_url' => Storage::disk('s3')->url($path)
                ]);
        }

        if ($request->hasFile('banner')) {
            $path = Storage::disk('s3')->put("banners", $request->file('banner'), 'public');

            if ($user->banner_url) {
                Storage::disk('s3')->delete(parse_url($user->banner_url, PHP_URL_PATH));
            }

            $user->update([
                'banner_url' => Storage::disk('s3')->url($path)
                ]);
        }

        return redirect()->route('profiles.show', compact('user'));
    }
}
