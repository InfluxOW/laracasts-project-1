<?php

namespace App\Services;

use App\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadService
{
    public function handle(Request $request, Model $model, string $relation)
    {
        $filename = $relation;

        if ($request->request->has($filename)) {
            if ($model->$relation) {
                Storage::disk('s3')->delete(parse_url($model->$relation->url, PHP_URL_PATH));
                $model->$relation->delete();
            }
            $image = json_decode($request->request->get($filename), true);
            $model->$relation()->create($image);
        }
    }

    public function upload($file, $folder, $type = 'image')
    {
        $path = Storage::disk('s3')->put($folder, $file, 'public');
        $url = Storage::disk('s3')->url($path);

        if ($type === 'image') {
            $image = Image::make([
                'url' => $url,
                'type' => Str::singular($folder)
                ]);
            return $image;
        }
    }
}
