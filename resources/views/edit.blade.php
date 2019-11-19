<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>記事詳細ページ</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>{{ $article->title }}の編集画面</h1>
        {{ $article->category_id }}
        {{ $catName }}
        <form action="{{ route('article.confirm', ['id' => $article->id]) }}" method="post">
            {{ csrf_field() }}
            <div>
                <label>タイトル : <input type="text" name="title" value={{ $article->title }}></label>
            </div>
            <div>
                <label>記事内容 : <textarea name="content" cols="40" rows="4">{{ $article->content }}</textarea></label>
            </div>
            <div>
                <select class="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="編集する">
            </div>
        </form>

        <a href={{ route('article.list') }}>記事一覧に戻る</a>
    </body>
</html>
