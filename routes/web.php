<?php

use App\Http\Controllers\TaskrecordingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskrecordingController::class, 'index']);

Route::get('/taskrecording', [TaskrecordingController::class, 'index'])->name('taskrecording.index');
Route::get('/taskrecording/create', [TaskrecordingController::class, 'create'])->name('taskrecording.create');

Route::post('/taskrecording/store', [TaskrecordingController::class, 'store'])->name('taskrecording.store');