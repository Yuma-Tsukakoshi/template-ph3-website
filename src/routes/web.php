<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Quiz2Controller;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Question1Controller;
use App\Http\Controllers\Question2Controller;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\IndexController;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//トップページ表示
Route::get('/index', function () {
    return view('index');
})->name('top');

// クイズページ表示 1と2はid属性で指定する
Route::get('/quizzes', [IndexController::class, 'quiz'])->name('quizzes');
Route::get('/quizzes/{id}', [QuizController::class , 'index'])->name('quizzes.index');


Route::get('/auth', function () {
    return view('dashboard');
})->middleware(['auth','admin','verified'])->name('dashboard');

// nameで指定した名前でルーティングを呼び出すことができる
Route::get('/auth/user',[AuthController::class, 'index'])->name('auth.user');

Route::group(['prefix'=>'member'],function(){
    Route::get('/auth/quiz1',[Question1Controller::class, 'index'])->name('auth.quiz1');
    Route::get('/auth/quiz1/create',[Question1Controller::class, 'create'])->name('auth.quiz1.create');
    Route::post('/auth/quiz1/store',[Question1Controller::class, 'store'])->name('auth.quiz1.store');
    Route::get('/auth/quiz1/edit/{id}',[Question1Controller::class, 'edit'])->name('auth.quiz1.edit');
    Route::post('/auth/quiz1/update/{id}',[Question1Controller::class, 'update'])->name('auth.quiz1.update');
    Route::post('/auth/quiz1/destroy/{id}',[Question1Controller::class, 'destroy'])->name('auth.quiz1.destroy');
});

Route::resource('questions2', Question2Controller::class);
//   GET|HEAD        questions2 ....  questions2.index › Question2Controller@index  
//   POST            questions2 .. questions2.store › Question2Controller@store  
//   GET|HEAD        questions2/create ..  questions2.create › Question2Controller@create  
//   GET|HEAD        questions2/{questions2}  questions2.show › Question2Controller@show  
//   PUT|PATCH       questions2/{questions2}  questions2.update › Question2Controller@update  
//   DELETE          questions2/{questions2}  questions2.destroy › Question2Controller@destroy  
//   GET|HEAD        questions2/{questions2}/edit 


// choiceのresource_methodを作成する
ROUTE::resource('/{question_id}/choices', ChoiceController::class);
//  GET|HEAD     {question_id}/choices ...... choices.index › ChoiceController@index  
//   POST {question_id}/choices ....... choices.store › ChoiceController@store  
//   GET|HEAD {question_id}/choices/create ....... choices.create › ChoiceController@create  
//   GET|HEAD {question_id}/choices/{choice}  choices.show › ChoiceController@show  
//   PUT|PATCH    {question_id}/choices/{choice} ..... choices.update › ChoiceController@update  
//   DELETE   {question_id}/choices/{choice} ... choices.destroy › ChoiceController@destroy  
//   GET|HEAD {question_id}/choices/{choice}/edit .... choices.edit › ChoiceController@edit

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
