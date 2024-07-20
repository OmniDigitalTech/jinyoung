<?php

namespace Modules\Management\Http\Controllers;

use App\Models\Picture;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BackupController extends Controller
{
    public function picture(){
        $pictures = Picture::latest()->get();

        return view('management::backup.picture', compact('pictures'));
    }

    public function download(Picture $picture){
        $filePath = storage_path('app/public/images/' . $picture->file_name);
        return response()->download($filePath);
    }
}
