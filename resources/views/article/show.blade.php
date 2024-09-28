@extends('welcome')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Single Post</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Single Post</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    {{ $article->title }}
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-clock"></i>
                                            <a href="blog-details.html">
                                                <time datetime="2020-01-01">{{ $article->created_at }}</time>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End meta top -->

                                <div class="content">
                                    <p>{{ $article->body }}</p>
                                    <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">{{ $article->category->title }}</a></li>
                                    </ul>
                                </div>

                                <div>
                                    <a href="{{ route('articles.edit', ['article=>$article']) }}">Edit</a>
                                    <form action="{{ route('articles.destroy', ['article => $article']) }}"method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="bg-transparent border-0">
                                    </form>
                                </div>
                                <!-- End meta bottom -->

                            </article>

                        </div>
                    </section>

                    <!-- /Blog Details Section -->
                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Category</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
