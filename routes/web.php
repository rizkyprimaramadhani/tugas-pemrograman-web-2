<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taskrecording', function () {
    return view('taskrecording.index', ['title' => 'Task Recording']);
});

Route::get('/taskrecording/create', function () {
    return view('taskrecording.create', ['title' => ' Create Task Recording']);
});