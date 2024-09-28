<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('article.index', [
            'articles' => Article::all(),
            'latest' => Article::orderByDesc('id')->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photo' => 'required',
            'category_id' => 'required',
        ]);
        $photo_path = $request->photo->store('image');
        $validatedData['photo'] = $photo_path;
        Article::create($validatedData);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            $photo_path = $request->photo->store('image');
            $validatedData['photo'] = $photo_path;
        }
        $article->update($validatedData);
        return redirect(route('articles.show', ['article' => $article]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
