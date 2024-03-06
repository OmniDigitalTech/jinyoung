<?php

if (!function_exists('insert_picture')) {
    function insert_picture($picture, $model, $caption = null, $base64 = false) {
        $service = new \App\Services\PictureService();
        $folder = class_basename($model);
        $location = 'images';

        $filename = pathinfo($picture, PATHINFO_EXTENSION);;
        if (isVideo($filename)) {
            $location = 'videos';
        }

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

function isVideo($filename) {
    $videoExtensions = ['mp4', 'avi', 'mov', 'wmv', 'mkv', 'flv', 'webm', '3gp', 'ogg', 'mpeg'];

    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    return in_array($extension, $videoExtensions);
}
