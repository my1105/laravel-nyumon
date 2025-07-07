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

public function show($id)
{
    $diary = Diary::find($id);

    if (!$diary) {
        abort(404); // 該当IDがなければ404エラー
    }

    return view('diary.show', compact('diary'));
}

// 編集画面表示
public function edit($id)
{
    $diary = Diary::find($id);
    return view('diary.edit', compact('diary'));
}

// 更新処理
public function update(Request $request, $id)
{
    $diary = Diary::find($id);

    $validated = $request->validate([
        'title' => 'required|max:20',
        'body' => 'required|max:400',
    ]);

    $diary->update($validated);

    return back()->with('message', '更新しました');
}
}