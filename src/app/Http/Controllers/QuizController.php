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
        // select('id', 'content', 'image', 'supplement', 'quiz_id')
        // dd($questions);
        return view('quiz',compact('questions'));
    }
}
