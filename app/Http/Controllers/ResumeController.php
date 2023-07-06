<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all(); // Получаем все записи резюме из базы данных

        return view('resume', compact('resumes'));
    }
}
