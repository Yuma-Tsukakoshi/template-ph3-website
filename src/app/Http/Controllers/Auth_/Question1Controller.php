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
        $quiz1->question = $request->input('content');
        $quiz1->answer = $request->input(('image'));
        $quiz1->answer = $request->input(('supplement'));
        
        $quiz1->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
