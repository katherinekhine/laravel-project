@extends('welcome')
@section('content')
    <div class="container">
        <h1 class="text-center my-3">New Blog</h1>
        <form action="" method="" class="py-3">
            <div class="my-2">
                <label for="title" class="form-lable">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title" class="form-control">
            </div>
            <div class="my-2">
                <label for="title" class="form-lable">Body:</label>
                <textarea name="body" id="body" cols="30" rows="7" class="form-control" placeholder="Body"></textarea>
            </div>
            <div class="my-2">
                <label for="photo" class="form-lable">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="my-2">
                <label for="category" class="form-lable">Category:</label>
                <select name="category_id" id=""></select>
            </div>
        </form>
    </div>
@endsection
