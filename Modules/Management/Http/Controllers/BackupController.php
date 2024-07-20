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
        return response()->download($picture->url);
    }
}
