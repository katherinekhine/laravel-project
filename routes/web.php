<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function() {
    return view("about");
});

Route::get("/contact", function() {
    return view("contact");
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');




