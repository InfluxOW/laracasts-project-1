<?php

namespace App\Http\Controllers;

use App\Image;
use App\Services\UploadService;
use App\Tweet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadsController extends Controller
{
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function store(Request $request)
    {
        $filename = array_key_first($request->file());
        $folder = Str::plural($filename);
        $file = $request->file($filename);

        return $this->uploadService->upload($file, $folder);
    }
}
