<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with('choices')->get();
        return view('quiz',compact('questions'));
    }
}
