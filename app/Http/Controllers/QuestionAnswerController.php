<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use App\Models\Price;

class QuestionAnswerController extends Controller
{
    public function index()
    {
        $questionAnswers = QuestionAnswer::all();
        $prices = Price::all();
        return view('services', compact('questionAnswers', 'prices'));
    }
}
