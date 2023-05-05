<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;


class VideoController extends Controller
{
    public function allVideo(){
        $videos = Video::orderBy('id', 'DESC')->paginate(6);
        return view('video', compact('videos'));
       }

       
}
