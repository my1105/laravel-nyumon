<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>日記を編集</title>
  <style>
    body { font-family: sans-serif; max-width: 600px; margin: 30px auto; }
    label { display: block; margin-top: 10px; font-weight: bold; }
    input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
    button { margin-top: 15px; padding: 10px 20px; }
  </style>
</head>
<body>
  <h1>日記を編集</h1>

  @if (session('message'))
    <p style="color: green;">{{ session('message') }}</p>
  @endif

  <form method="post" action="{{ route('diary.update', $diary->id) }}">
    @csrf
    @method('patch')

    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" value="{{ old('title', $diary->title) }}">

    <label for="body">内容</label>
    <textarea name="body" id="body" rows="8">{{ old('body', $diary->body) }}</textarea>

    <button type="submit">更新する</button>
  </form>
</body>
</html>
