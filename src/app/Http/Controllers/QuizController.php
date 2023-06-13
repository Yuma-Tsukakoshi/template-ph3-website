<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class QuizController extends Controller
{
    public function index()
    {
        //with ('紐付けたい関数名') をつける！今回は、Questionモデルのchoices関数を紐付けたいので、with('choices')となる。
        $questions = Question::with('choices')->get();
        // dd($questions);
        return view('quiz1',compact('questions'));
    }
}
