<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
       $diaries = Diary::all(); 
       return view('diary.index', compact('diaries')); 
    }


public function create()
{
    return view('diary.create');
}

public function store(Request $request)
{
    // バリデーション
    $validated = $request->validate([
        'title' => 'required|max:20',
        'body' => 'required',
    ]);

    // データ保存
    $diary = new Diary();
    $diary->date = date("Y-m-d");
    $diary->title = $validated['title'];
    $diary->body = $validated['body'];
    $diary->save();

    // フォームに戻って成功メッセージ表示
    return back()->with('message', '保存しました');
}
}