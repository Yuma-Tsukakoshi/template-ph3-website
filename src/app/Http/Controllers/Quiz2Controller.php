<?php

namespace App\Http\Controllers;

use App\Models\Question2;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class Quiz2Controller extends Controller
{
    public function index()
    {
        //with ('紐付けたい関数名') をつける！今回は、Questionモデルのchoices関数を紐付けたいので、with('choices')となる。
        $questions = Question2::with('choices')->get();
        dd($questions);
        return view('quiz2',compact('questions'));
    }
}
