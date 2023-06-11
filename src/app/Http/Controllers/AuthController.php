<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('auth_.user', compact('users'));
    }
}
