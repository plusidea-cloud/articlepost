<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>記事一覧</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>記事一覧</h1>
        <ul>
        @foreach($articles as $article)
        <?php
            $dates = explode(" ", $article->updated_at);
            $date = $dates[0];
            $time = $dates[1];
        ?>
            <li><span class="date">{{ $date }}</span><a href={{ route('article.detail', ['id' => $article->id]) }}>{{ $article->title }}</a></li>
        @endforeach
        </ul>
    </body>
</html>
