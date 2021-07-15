<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SlotsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/me', [Auth::class, 'user']);
    Route::get('/questions', [QuestionController::class, 'questions']);
    Route::post('/finish', [QuestionController::class, 'finish']);
    Route::post('/run', [SlotsController::class, 'run']);
    Route::post('/verify', [SlotsController::class, 'verify']);

    Route::get('/concurso', function () {  return view('welcome'); });
    Route::get('/slots', [SlotsController::class, 'slots']);

});

Route::get('/', function () {  return redirect('/login'); });


