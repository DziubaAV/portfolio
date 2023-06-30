<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteCreationController extends Controller
{
    public function index()
    {
        return view('site-creation');
    }
}
