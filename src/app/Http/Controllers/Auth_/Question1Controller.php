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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth_.quiz1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $quiz1 = new Question;
        $quiz1->content = $request->input('content');
        $quiz1->image = $request->input(('image'));
        $quiz1->supplement = $request->input(('supplement'));
        $quiz1->quiz_id = $request->input(('quiz_id'));

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
        return view('auth_.quiz1.edit', compact('question')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $question = Question::find($id);
        $question->content = $request->input('content');
        $question->image = $request->input(('image'));
        $question->supplement = $request->input(('supplement'));

        $question->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
