<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - ZenBlog Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- swiper css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">ZenBlog</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="single-post.html">Single Post</a></li>
                    <li class="dropdown"><a href="#"><span>Categories</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="category.html">Category 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="category.html">Category 2</a></li>
                            <li><a href="category.html">Category 3</a></li>
                            <li><a href="category.html">Category 4</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>

    <main class="main">

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

        </section><!-- /Slider Section -->

        <!-- Trending Category Section -->
        <section id="trending-category" class="trending-category section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <div class="col-lg-4">

                            <div class="post-entry lg">
                                <a href="blog-details.html"><img src="assets/img/post-landscape-1.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h2><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a>
                                </h2>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Vero temporibus repudiandae, inventore pariatur numquam cumque possimus
                                    exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique
                                    blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque.
                                    Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium
                                    dignissimos</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-1.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Cameron Williamson</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="row g-5">
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                                    </div>
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-5.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Food</span> <span
                                                class="mx-1">•</span> <span>Jul 17th '22</span></div>
                                        <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused
                                                During Video Calls?</a></h2>
                                    </div>
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-7.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Design</span> <span
                                                class="mx-1">•</span> <span>Mar 15th '22</span></div>
                                        <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most
                                                Interesting Places On the Web?</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-3.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch
                                                For Instagram</a></h2>
                                    </div>
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-6.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Tech</span> <span
                                                class="mx-1">•</span> <span>Mar 1st '22</span></div>
                                        <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom
                                                Should Know</a></h2>
                                    </div>
                                    <div class="post-entry">
                                        <a href="blog-details.html"><img src="assets/img/post-landscape-8.jpg"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Travel</span> <span
                                                class="mx-1">•</span> <span>Jul 5th '22</span></div>
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

                                </div> <!-- End Trending Section -->
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>

            </div>

        </section><!-- /Trending Category Section -->

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
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h3><a href="blog-details.html">What is the son of Football Coach John Gruden,
                                        Deuce Gruden doing Now?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis
                                    error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos
                                    deleniti?</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-2.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-list border-bottom">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-1.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time
                                            Jobs You Can Do Now</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                        possimus</p>
                                </div>

                                <div class="post-list">
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="blog-details.html">5 Great Startup Tips for Female
                                            Founders</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
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
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay
                                    Focused During Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in
                                    Layers That Will Inspire Your New Haircut</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long
                                    and Medium Hair</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working
                                    Mom’s Guide</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                    the Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                    Mom Should Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Culture Category Section -->

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
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                <h3><a href="blog-details.html">What is the son of Football Coach John Gruden,
                                        Deuce Gruden doing Now?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis
                                    error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos
                                    deleniti?</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-4.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-list border-bottom">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-5.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="blog-details.html">11 Work From Home Part-Time
                                            Jobs You Can Do Now</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit. Vero temporibus repudiandae, inventore pariatur numquam cumque
                                        possimus</p>
                                </div>

                                <div class="post-list">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="blog-details.html">5 Great Startup Tips for Female
                                            Founders</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-7.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
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
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">How to Avoid Distraction and Stay
                                    Focused During Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">17 Pictures of Medium Length Hair in
                                    Layers That Will Inspire Your New Haircut</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">9 Half-up/half-down Hairstyles for Long
                                    and Medium Hair</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">Life Insurance And Pregnancy: A Working
                                    Mom’s Guide</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                    the Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                    Mom Should Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Business Category Section -->

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
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <h2><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a>
                            </h2>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem?
                                Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut
                                saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum
                                animi atque eveniet, quo, praesentium dignissimos</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-7.jpg" alt=""
                                        class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Esther Howard</h3>
                                </div>
                            </div>
                        </div>

                        <div class="post-list border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">The Best Homemade Masks for Face (keep
                                    the Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-list">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">•</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="blog-details.html">10 Life-Changing Hacks Every Working
                                    Mom Should Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-6.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-5.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">•</span> <span>Jul 17th '22</span></div>
                                    <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused
                                            During Video Calls?</a></h2>
                                </div>
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-4.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">•</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most
                                            Interesting Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-3.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch For
                                            Instagram</a></h2>
                                </div>
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-2.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">•</span> <span>Mar 1st '22</span></div>
                                    <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                </div>
                                <div class="post-list">
                                    <a href="blog-details.html"><img src="assets/img/post-landscape-1.jpg"
                                            alt="" class="img-fluid"></a>
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

        </section><!-- /Lifestyle Category Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">ZenBlog</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hic solutasetp</h4>
                    <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">ZenBlog</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- aos js --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        document.querySelector('#preloader').remove();
        AOS.init();
    </script>

</body>

</html>
