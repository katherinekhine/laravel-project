@extends('welcome')

@section('content')
    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">

                <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                }
                }
            </script>

                <div class="swiper-wrapper">

                    <div class="swiper-slide" style="background-image: url('assets/img/post-slide-1.jpg');">
                        <div class="content">
                            <h2><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                                    Away)</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('assets/img/post-slide-2.jpg');">
                        <div class="content">
                            <h2><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will
                                    Inspire Your New Haircut</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('assets/img/post-slide-3.jpg');">
                        <div class="content">
                            <h2><a href="single-post.html">13 Amazing Poems from Shel Silverstein with Valuable
                                    Life Lessons</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('assets/img/post-slide-4.jpg');">
                        <div class="content">
                            <h2><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium
                                    Hair</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est
                                mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam
                                obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- /Slider Section -->

    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">

                        <div class="post-entry lg">
                            <a href="{{ route('articles.show', ['article' => $latest]) }}">
                                <img src="{{ $latest->photo }}" alt="" class="img-fluid">
                            </a>
                            <div class="post-meta">
                                <span class="date">{{ $latest->category_id }}</span>
                                <span class="mx-1">•</span>
                                <span>{{ $latest->created_at }}</span>
                            </div>
                            <h2>
                                <a href="{{ route('articles.show', ['article' => $latest]) }}">{{ $latest->title }}</a>
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
                                        <a href="{{ route('articles.show', ['article' => $article]) }}">
                                            <img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="post-meta">
                                            <span class="date">{{ $article->category_id }}</span>
                                            <span class="mx-1">•</span>
                                            <span>{{ $article->created_at }}</span>
                                        </div>
                                        <h2>
                                            <a
                                                href="{{ route('articles.show', ['article' => $article]) }}">{{ $article->title }}</a>
                                        </h2>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Article End --}}



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

    <!-- Culture Category Section -->
    <section id="culture-category" class="culture-category section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <h2>Culture</h2>
                <p><a href="categories.html">See All Culture</a></p>
            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-md-9">

                    <div class="d-lg-flex post-entry">
                        <a href="blog-details.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                            <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h3><a href="blog-details.html">What is the son of Football Coach John Gruden,
                                    Deuce Gruden doing Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis
                                error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos
                                deleniti?</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-list border-bottom">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-1.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time
                                        Jobs You Can Do Now</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                    possimus</p>
                            </div>

                            <div class="post-list">
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">5 Great Startup Tips for Female
                                        Founders</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and
                                        Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                    possimus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay
                                Focused During Video Calls?</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in
                                Layers That Will Inspire Your New Haircut</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long
                                and Medium Hair</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working
                                Mom’s Guide</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                the Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                Mom Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /Culture Category Section -->

    <!-- Business Category Section -->
    <section id="business-category" class="business-category section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <h2>Business</h2>
                <p><a href="categories.html">See All Business</a></p>
            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-md-9 order-md-2">

                    <div class="d-lg-flex post-entry">
                        <a href="blog-details.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                            <img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h3><a href="blog-details.html">What is the son of Football Coach John Gruden,
                                    Deuce Gruden doing Now?</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis
                                error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos
                                deleniti?</p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Wade Warren</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="post-list border-bottom">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-5.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time
                                        Jobs You Can Do Now</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                    possimus</p>
                            </div>

                            <div class="post-list">
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">5 Great Startup Tips for Female
                                        Founders</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-7.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                    <span>Jul 5th '22</span>
                                </div>
                                <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and
                                        Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                    possimus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay
                                Focused During Video Calls?</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in
                                Layers That Will Inspire Your New Haircut</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long
                                and Medium Hair</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working
                                Mom’s Guide</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                the Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                Mom Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /Business Category Section -->

    <!-- Lifestyle Category Section -->
    <section id="lifestyle-category" class="lifestyle-category section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <h2>Lifestyle</h2>
                <p><a href="categories.html">See All Lifestyle</a></p>
            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-list lg">
                        <a href="blog-details.html"><img src="assets/img/post-landscape-8.jpg" alt=""
                                class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a>
                        </h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                            temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem?
                            Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut
                            saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum
                            animi atque eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="m-0 p-0">Esther Howard</h3>
                            </div>
                        </div>
                    </div>

                    <div class="post-list border-bottom">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                the Pimples Away)</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-list">
                        <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">•</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                Mom Should Know</a></h2>
                        <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-6.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                            </div>
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-5.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 17th '22</span></div>
                                <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused
                                        During Video Calls?</a></h2>
                            </div>
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-4.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Mar 15th '22</span></div>
                                <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most
                                        Interesting Places On the Web?</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-4 border-start custom-border">
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-3.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch For
                                        Instagram</a></h2>
                            </div>
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Mar 1st '22</span></div>
                                <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should
                                        Know</a></h2>
                            </div>
                            <div class="post-list">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-1.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2><a href="blog-details.html">5 Great Startup Tips for Female Founders</a>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and
                                        Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length
                                        Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles
                                        for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A
                                        Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for
                                        Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-list border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every
                                        Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Lifestyle Category Section -->
@endsection
