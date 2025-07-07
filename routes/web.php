<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', function () {
    return 'Hello!';
}); 

Route::get('/diary', [DiaryController::class, 'index']);

Route::get('/diary', [DiaryController::class, 'index']);// 一覧表示
Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create'); // 入力フォーム表示
Route::post('/diary', [DiaryController::class, 'store'])->name('diary.store');         // 日記保存
Route::get('/diary/{id}', [DiaryController::class, 'show'])->name('diary.show');Route::get('/diary/{id}/edit', [DiaryController::class, 'edit'])->name('diary.edit');
Route::patch('/diary/{id}', [DiaryController::class, 'update'])->name('diary.update');