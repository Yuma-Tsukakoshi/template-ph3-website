<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class Question1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $questions = Question::all();
        $questions = Question::paginate(20);
        return view('auth_.quiz1', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth_.quiz1_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'content' => 'required|max:200',
            'supplement' => 'max:200',
        ]);

        // 画像フォームでリクエストした画像を取得
        $img = $request->file('image');
        // storage > public > img配下に画像が保存される
        $path = $img->store('img','custom');


        $quiz1 = new Question;
        // $quiz1 = Question::create($validated);
        $quiz1->content = $request->input('content');
        // フォームでtype=”file”としているので、file()でリクエストされたファイル情報を取得します
        $quiz1->image = $path;
        $quiz1->supplement = $request->input('supplement');
        $quiz1->quiz_id = $request->input('quiz_id');

        $quiz1->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //詳細表示を行うが今回は使わない
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $question = Question::find($id);
        return view('auth_.quiz1_edit', compact('question')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // $validated = $request->validate([
        //     'content' => 'required|max:250',
        //     'supplement' => 'max:250',
        // ]);

        // $question = Question::create($validated);
        $question = Question::find($id);
        $question->content = $request->input('content');
        $question->image = $request->input(('image'));
        $question->supplement = $request->input(('supplement'));

        $question->save();

        $request->session()->flash('message', '更新が完了しました。');

        return redirect()->route('auth.quiz1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        $question = Question::find($id);
        $question->delete();

        $request->session()->flash('message', '削除が完了しました。');

        return redirect()->route('auth.quiz1');
    }
}
