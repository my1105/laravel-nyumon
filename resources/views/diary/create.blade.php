<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>日記を書く</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #f9f9f9;
      padding: 30px;
      max-width: 600px;
      margin: auto;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      background: #fff;
      padding: 80px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    button {
      background-color: #38bdf8;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0ea5e9;
    }

    .message {
      color: green;
      text-align: center;
      margin-bottom: 20px;
    }

    .error {
      color: red;
      font-size: 13px;
      margin-top: -10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>日記を書く</h1>

  @if(session('message'))
    <div class="message">{{ session('message') }}</div>
  @endif

  <form method="post" action="{{ route('diary.store') }}">
    @csrf

    <div>
      <label for="title">タイトル</label>
      <input type="text" id="title" name="title" value="{{ old('title') }}">
      @error('title')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="body">本文</label>
      <textarea id="body" name="body" rows="6">{{ old('body') }}</textarea>
      @error('body')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>

    <div style="text-align: center;">
      <button type="submit">作成</button>
    </div>
  </form>
</body>
</html>
