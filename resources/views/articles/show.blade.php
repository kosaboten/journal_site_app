<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article -> title }}</p>
    <p>{{ $article -> body }}</p>
    <div class="button-group">
        <button onclick="location.href='{{ route('articles.index') }}'">一覧へ戻る</button>
    </div>
</body>
</html>
