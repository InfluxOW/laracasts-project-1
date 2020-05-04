<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Banner;
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

        return redirect()->route('profiles.show', compact('user'));
    }

    public function imageUpload(Request $request, User $user)
    {
        if ($request->hasFile('avatar')) {
            $path = Storage::disk('s3')->put("avatars", $request->file('avatar'), 'public');

            if ($user->avatar) {
                Storage::disk('s3')->delete(parse_url($user->avatar->url, PHP_URL_PATH));
                $user->avatar->delete();
            }

            $avatar = Image::make(['url' => Storage::disk('s3')->url($path), 'type' => 'avatar']);
            $user->avatar()->save($avatar);

            // $avatar = Avatar::make(['url' => Storage::disk('s3')->url($path)]);
            // $user->avatar()->save($avatar);
        }

        if ($request->hasFile('banner')) {
            $path = Storage::disk('s3')->put("banners", $request->file('banner'), 'public');

            if ($user->banner) {
                Storage::disk('s3')->delete(parse_url($user->banner->url, PHP_URL_PATH));
                $user->banner->delete();
            }

            $banner = Image::make(['url' => Storage::disk('s3')->url($path), 'type' => 'banner']);
            $user->banner()->save($banner);

            // $banner = Banner::make(['url' => Storage::disk('s3')->url($path)]);
            // $user->banner()->save($banner);
        }

        return $user;
    }
}
