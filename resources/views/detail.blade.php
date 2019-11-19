<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>記事詳細ページ</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>{{ $article->title }}</h1>
        <p class="cat">{{ $catName }}</p>
        <article>
            {{ $article->content }}
        </article>
        <a href={{ route('article.list') }}>記事一覧に戻る</a> | <a href="{{ route('article.edit', ['id' => $article->id]) }}">記事編集する</a>
    </body>
</html>
