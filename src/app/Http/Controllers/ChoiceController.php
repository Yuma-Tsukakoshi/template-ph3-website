<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($question_id)
    {
        //
        $choices = Choice::withTrashed()->where('question_id', $question_id)->get();
        // dd($choices);
        return view('auth_.quiz1_choice_index', compact('choices', 'question_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        return view('auth_.quiz1_choice_create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($question_id, Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'max:250',
        ]);

        $choices = new Choice;
        // $choices = Choice::create($validated);
        // $choices->question_id=$request->$question_id;
        $choices->question_id = $question_id;
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');

        $choices->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // quewestion_idは問題番号との紐付けよう idは設問id
    public function edit($question_id, $id)
    {
        //
        $choice = Choice::find($id);
        return view('auth_.quiz1_choice_edit', compact('choice', 'question_id', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    /// 先に読み込ませたいパラメータを書いてからRequestを書く 
    //めっちゃ大事！ メソッド内では使われないけど、メソッドの引数に入れることで、引き渡している（ちなみに、$question_id 入れないと正しく編集されないし削除もされない⇒別の設問に影響出る）
    public function update($question_id, $id,Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'max:250',
        ]);

        // $choices = Choice::create($validated);
        $choices = Choice::find($id);
        // $choices->question_id=$request->$question_id->id;
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');

        //DBに保存
        $choices->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($question_id,$id)
    {
        //
        $choices = Choice::find($id);

        $choices->delete();

        return redirect()->route('auth.quiz1');
    }
}
