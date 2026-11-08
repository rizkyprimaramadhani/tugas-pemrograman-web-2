<?php

use App\Http\Controllers\TaskrecordingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taskrecording', [TaskrecordingController::class, 'index']);
Route::get('/taskrecording/create', [TaskrecordingController::class, 'create']);