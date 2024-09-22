<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    return view('article.index', [
        'articles' => Article::all(),
        'latest' => Article::orderByDesc('id')->first()
    ]);
});


Route::get('/articles/{article}', function (Article $article) {
    return view("article.show", [
        'article' => $article
    ]);
});
