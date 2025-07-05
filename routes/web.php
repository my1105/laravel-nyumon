<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', function () {
    return 'Hello!';
}); 

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

Route::get('/diary', [DiaryController::class, 'index']);