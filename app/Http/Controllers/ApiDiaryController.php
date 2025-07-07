<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class ApiDiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all(); // 全件取得
        return response()->json($diaries); // JSON形式で返す
    }
}