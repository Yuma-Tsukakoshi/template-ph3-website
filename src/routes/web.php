<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Question1Controller;
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
// Route::get('/quizzes', [QuizController::class, 'index']);
Route::get('/quizzes/1', [QuizController::class , 'index']);
// Route::get('/quizzes/2', [QuizController::class , 'index']);


Route::get('/auth', function () {
    return view('dashboard');
})->middleware(['auth','admin','verified'])->name('dashboard');

// nameで指定した名前でルーティングを呼び出すことができる
Route::get('/auth/user',[AuthController::class, 'index'])->name('auth.user');

Route::group(['prefix'=>'member'],function(){
    Route::get('/auth/quiz1',[Question1Controller::class, 'index'])->name('auth.quiz1');
    Route::get('/auth/quiz1/create',[Question1Controller::class, 'create'])->name('auth.quiz1.create');
    Route::post('/auth/quiz1/store',[Question1Controller::class, 'store'])->name('auth.quiz1.store');
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
