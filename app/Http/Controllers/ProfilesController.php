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
        $user->update($request->only('name', 'username', 'email'));

        if ($request->hasFile('avatar')) {
            $path = Storage::disk('s3')->put("avatars", $request->file('avatar'), 'public');

            if ($user->image) {
                Storage::disk('s3')->delete($user->image->path);
                $user->image->delete();
            }

            $image = Image::make([
                'path' => $path,
                'url' => Storage::disk('s3')->url($path)
                ]);
            $user->image()->save($image);
        }

        return redirect()->route('profiles.show', compact('user'));
    }
}
