<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

// 一覧表示
Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

// 入力フォーム表示
Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');

// 日記保存
Route::post('/diary', [DiaryController::class, 'store'])->name('diary.store');

// 個別表示
Route::get('/diary/{id}', [DiaryController::class, 'show'])->name('diary.show');

// 編集画面表示
Route::get('/diary/{id}/edit', [DiaryController::class, 'edit'])->name('diary.edit');

// 更新処理
Route::patch('/diary/{id}', [DiaryController::class, 'update'])->name('diary.update');

// 削除処理
Route::delete('/diary/{id}', [DiaryController::class, 'destroy'])->name('diary.destroy');