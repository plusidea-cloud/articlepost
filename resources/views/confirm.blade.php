<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>記事詳細ページ</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>編集の確認画面</h1>
        <p>下記の内容でよろしいですか？</p>
        <form method="POST" action="{{ route('article.update', ['id' => $id]) }}">
          @csrf
          title：{{ $title }}<br />
          content：{{ $content }}<br />
          <input type="submit" value="送信">
        </form>

        <a href={{ route('article.list') }}>記事一覧に戻る</a>
    </body>
</html>
