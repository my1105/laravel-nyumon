<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>{{ $diary->title }}</title>
  <style>
    body {
      font-family: sans-serif;
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background-color: #f9f9f9;
    }

    h1 {
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }

    .date {
      color: #888;
      font-size: 14px;
      margin-top: -10px;
    }

    .body {
      margin-top: 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>{{ $diary->title }}</h1>
  <div class="date">{{ $diary->date }}</div>
  <div class="body">{{ $diary->body }}</div>
</body>
</html>
