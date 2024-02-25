<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PictureService extends Controller
{
    public function __construct()
    {
        $this->middleware('optimizeImages');
    }

    public function upload($picture, $model, $location, $caption)
    {
        $imageName = pathinfo($picture->getClientOriginalName(), PATHINFO_FILENAME). "-" .uniqid();

        \Illuminate\Support\Facades\Storage::disk('public')->put($location, $picture);

        $picture = $model->picture()->create([
            'path' => $location,
            'file_name' => $picture->hashName(),
            'caption' => $caption,
        ]);

        return $picture;
    }
}
