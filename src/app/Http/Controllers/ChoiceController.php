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
        $choices = Choice::where('question_id', $question_id)->get();
        // dd($choices);
        return view('choices.index', compact('choices', 'question_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        return view('choices.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($question_id, Request $request)
    {
        //
        $choices = new Choice;
        // $choices->question_id=$request->$question->id;
        $choices->question_id = $question_id;
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');

        $choices->save();

        return redirect('auth.quiz1');
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
        $choices = Choice::find($id);
        return view('choices.edit', compact('choices', 'question_id', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    /// 先に読み込ませたいパラメータを書いてからRequestを書く
    public function update( $id,Request $request)
    {
        //
        $choices = Choice::find($id);
        // $choices->question_id=$request->$question->id;
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');

        //DBに保存
        $choices->save();

        return redirect('auth.quiz1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $choices = Choice::find($id);

        $choices->delete();

        return redirect('auth.quiz1');
    }
}
