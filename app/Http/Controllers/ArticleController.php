<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('index',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, $id)
    {
        $article = Article::find($id);
        $catID = $article->category_id;
        $category = Category::find($catID);
        $catName = $category->name;
        return view('detail', ['article' => $article, 'catName' => $catName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, $id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        $catID = $article->category_id;
        $category = Category::find($catID);
        $catName = $category->name;
        return view('edit', ['article' => $article, 'categories' => $categories, 'catName' => $catName]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Article  $article
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Article $article, $id)
    {
        $title = $request->session()->get('title');
        $content = $request->session()->get('content');
        $article = Article::find($id);
        $article->title = $title;
        $article->content = $content;
        $article->save();
        return redirect()->route('article.detail', ['id' => $id]);
    }

    public function confirm(Request $request, Article $article, $id)
    {
        $article = Article::find($id);
        $data = $request->all();

        $article->title = $request->title;
        $article->content = $request->content;
        $request->session()->put('title', $data['title']);
        $request->session()->put('content', $data['content']);
        return view('confirm', compact('title','content','id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
