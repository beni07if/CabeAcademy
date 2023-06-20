@extends('layout.master')

@section('stylei')

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->

<!-- Template Main CSS File -->
<link href="{{asset ('Append/main.css')}}" rel="stylesheet">
@endsection

@section('bodyStart')

<body class="blog-details-page">
    @endsection

    @section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">

        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{route('index')}}#home">ID Academy</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('index') }}#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#services">Topic</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#timeline">Timeline</a></li>
                    <li><a class="nav-link scrollto" href="#">Team</a></li>
                    <li><a class="nav-link scrollto" href="#">Documentation</a></li>
                    <!-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> -->
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> -->
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <!-- <li><a class="getstarted scrollto" href="#about">Login</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>

    </header><!-- End Header -->
    @endsection

    @section('carouselHome')
    <!-- ======= Hero Section ======= -->
    <section id="carouselTeam" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <!-- <h1>ID Academy by Inovasi Digital</h1> -->
                    <!-- <h2>Tim Short Course</h2> -->
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('Arsha/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
    @endsection

    @section('main')
    <main id="main">

        <!-- Blog-details Section - Blog Details Page -->
        <section id="blog-details" class="blog-details">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="article">

                            <div class="post-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">Study on GHG Emission</h2>

                            <div class="meta-top">
                                <ul>
                                    <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li> -->
                                    <li class="d-flex align-items-center"><i></i> Short course</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">Jan 1, 2022</time></li>
                                </ul>
                            </div>
                            <!-- End meta top -->

                            <div class="content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                                </p>

                                <!-- <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                                </p>

                                <blockquote>
                                    <p>
                                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                                    </p>
                                </blockquote> -->

                            </div><!-- End post content -->

                        </article><!-- End post article -->

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <!-- <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div> -->
                            <!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    <li><a href="#">GHG <span>(25)</span></a></li>
                                    <li><a href="#">Next-Gen Monev <span>(12)</span></a></li>
                                    <li><a href="#">Study Pattern Monitoring <span>(5)</span></a></li>
                                    <li><a href="#">100 Landscape Ideas <span>(22)</span></a></li>
                                    <li><a href="#">Expedition 1000 storm <span>(8)</span></a></li>
                                    <li><a href="#">Beauty Contest <span>(14)</span></a></li>
                                    <li><a href="#">EUDDR & Omnibus Law<span>(14)</span></a></li>
                                    <li><a href="#">US Forest Act 2021<span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Sidebar -->

                    </div>

                </div>

            </div>

        </section><!-- End Blog-details Section -->

    </main><!-- End #main -->
    @endsection

    @section('scriptIndex')

    @endsection

    @section('bodyEnd')
</body>
@endsection