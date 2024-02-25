<?php

if (!function_exists('insert_picture')) {
    function insert_picture($picture, $model, $caption = null, $base64 = false) {
        $service = new \App\Services\PictureService();
        $folder = class_basename($model);
        $location = 'images';

        return $service->upload($picture, $model, $location, $caption);
    }
}

if (!function_exists('insert_pictures')) {
    function insert_pictures($pictures, $model) {
        $uploaded = collect();

        foreach ($pictures as $picture) {
            $pic = insert_picture($picture, $model);
            $uploaded->push($pic);
        }

        return $uploaded;
    }
}
