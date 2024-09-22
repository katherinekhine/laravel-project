<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Category;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{article', [ArticleController::class, 'show'])->name('article.show');
