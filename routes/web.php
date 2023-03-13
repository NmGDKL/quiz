<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuizController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/panel', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => ['auth', 'İsAdmin']], function () {
    Route::get('deneme', function () {
        return "middleware testi";
    });
});

Route::group([
    'middleware' => ['auth', 'İsAdmin'],'prefix' => 'admin'], function () {
        Route::resource('quizzes',QuizController::class);
});