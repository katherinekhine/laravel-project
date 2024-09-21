@extends('welcome')

@section('content')
    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">

                        <div class="post-entry lg">
                            <a href="blog-details.html"><img src="{{ $latest->photo }}" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $latest->category_id }}</span> <span
                                    class="mx-1">•</span> <span>{{ $latest->created_at }}</span></div>
                            <h2><a href="blog-details.html">{{ $latest->title }}</a>
                            </h2>
                            <p class="mb-4 d-block">{{ $latest->body }}</p>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            {{-- Article Begin --}}
                            @foreach ($articles as $article)
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta">
                                            <span class="date">{{ $article->category_id }}</span> <span
                                                class="mx-1">•</span> <span>{{ $article->create_at }}</span>
                                        </div>
                                        <h2><a href="blog-details.html">{{ $article->title }}</a></h2>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Article End --}}
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-3.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch
                                            For Instagram</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-6.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">•</span>
                                        <span>Mar 1st '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom
                                            Should Know</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-8.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">•</span>
                                        <span>Jul 5th '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">5 Great Startup Tips for Female
                                            Founders</a></h2>
                                </div>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Trending</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">1</span>
                                                <h3>The Best Homemade Masks for Face (keep the Pimples Away)
                                                </h3>
                                                <span class="author">Jane Cooper</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">2</span>
                                                <h3>17 Pictures of Medium Length Hair in Layers That Will
                                                    Inspire Your New Haircut</h3>
                                                <span class="author">Wade Warren</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">3</span>
                                                <h3>13 Amazing Poems from Shel Silverstein with Valuable Life
                                                    Lessons</h3>
                                                <span class="author">Esther Howard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">4</span>
                                                <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                                <span class="author">Cameron Williamson</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">5</span>
                                                <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                                <span class="author">Jenny Wilson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- End Trending Section -->
                        </div>
                    </div>

                </div>
                <!-- End .row -->
            </div>

        </div>

    </section>
    <!-- /Trending Category Section -->
@endsection
