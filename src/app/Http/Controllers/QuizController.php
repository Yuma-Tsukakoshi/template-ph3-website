<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz');
    }
}
