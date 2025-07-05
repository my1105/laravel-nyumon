<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Diary</title>
</head>
<body>
@foreach($diaries as $diary)
<div>
  <div>{{ $diary->date }}</div>
  <div>{{ $diary->title }}</div>
</div>
@endforeach
</body>
</html>

