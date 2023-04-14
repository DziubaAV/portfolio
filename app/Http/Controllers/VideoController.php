<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;


class VideoController extends Controller
{
    public function allVideo(){
        $videos = Video::orderBy('id', 'DESC')->simplePaginate(10);
        return view('video', compact('videos'));
       }

       
}
