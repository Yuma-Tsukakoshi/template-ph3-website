<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class QuizController extends Controller
{
    public function index($id)
    {
        //with ('紐付けたい関数名') をつける！今回は、Questionモデルのchoices関数を紐付けたいので、with('choices')となる。
        $questions = Question::with('choices')->get();
        // QuestionModelを1,2にわけて、idによって出力変更する
        // dd($questions);
        return view('quiz'.$id , compact('questions'));
    }
}
