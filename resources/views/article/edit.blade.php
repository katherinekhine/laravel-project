@extends('welcome')
@section('content')
    <div class="container">
        <h1 class="text-center my-3">Update Blog</h1>
        <form action="{{ route('articles.update', ['article' => $article]) }}" method="post" class="py-3"
            enctype="multipart/form-data">
            @csrf
            @method(`PUT`)
            <div class="my-2">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title" class="form-control"
                    value="{{ $article->title }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="body" class="form-label">Body:</label>
                <textarea name="body" id="body" cols="30" rows="7" class="form-control" placeholder="Body">{{ $article->body }}</textarea>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control">
                <img src="{{ asset('storage/' . $article->photo) }}" alt="" height="150px">
                @error('photo')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="category" class="form-label">Category:</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">--choose category--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @@selected($category->id ==
                            $article->category_id)>{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
@endsection
