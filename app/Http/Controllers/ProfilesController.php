<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserValidation;
use App\Image;
use App\Services\UploadService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    public function __construct(UploadService $uploadService)
    {
        $this->authorizeResource(User::class);
        $this->uploadService = $uploadService;
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

        $this->uploadService->handle($request, $user, 'avatar');
        $this->uploadService->handle($request, $user, 'banner');

        return redirect()->route('profiles.show', compact('user'));
    }
}
