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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');
Route::get('/articles/{article', [ArticleController::class, 'show'])->name('article.show');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
