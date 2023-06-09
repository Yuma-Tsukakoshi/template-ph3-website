<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class QuizController extends Controller
{
    public function index()
    {
        //with ('紐付けたい関数名') をつける！今回は、Questionモデルのquestions関数を紐付けたいので、with('questions')となる。
        $questions = Question::with('questions')->get();
        return view('quiz',compact('questions'));
    }
}
