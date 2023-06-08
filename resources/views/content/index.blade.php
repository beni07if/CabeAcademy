@extends('layout.master')

@section('stylei')
<style>
    .icon-box {
        height: 90%;
        /* padding: 2px 2px 2px 2px; */
        background: #E37B1C;
    }

    .member-info {
        padding-top: 20px;

    }

    /* style timeline */
    .cta h2 {
        color: #ffffff;
    }

    .cta p {
        color: #778899;
    }

    .timeline {
        list-style: none;
        padding: 0;
        position: relative;
    }

    .timeline:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #ccc;
        left: 50%;
        margin-left: -1px;
    }

    .timeline li {
        position: relative;
        margin-bottom: 50px;
        cursor: pointer;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    .timeline li:before,
    .timeline li:after {
        content: '';
        display: table;
    }

    .timeline li:after {
        clear: both;
    }

    .timeline li div {
        position: relative;
        width: 50%;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
        transition: transform 0.3s ease;
    }

    .timeline li div time {
        display: block;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .timeline li div p {
        margin-bottom: 0;
    }

    .timeline li:nth-child(even) div {
        float: right;
    }

    .timeline li:nth-child(even) div:before {
        content: '';
        position: absolute;
        top: 25px;
        left: -15px;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-right: 15px solid #f9f9f9;
    }

    .timeline li:nth-child(odd) div {
        float: left;
    }

    .timeline li:nth-child(odd) div:before {
        content: '';
        position: absolute;
        top: 25px;
        right: -15px;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #f9f9f9;
    }

    .timeline li div:hover {
        transform: scale(1.05);
    }

    .timeline li div:before {
        content: '';
        position: absolute;
        top: 50%;
        left: -30px;
        width: 30px;
        height: 2px;
        background: #ccc;
        transform: translateY(-50%);
    }

    .services {
        padding-top: -100px;
    }

    /* end style timelinefsdfa  */
</style>

@endsection

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">

    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="#">ID Academy</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Topic</a></li>
                <li><a class="nav-link scrollto" href="#timeline">Timeline</a></li>
                <li><a class="nav-link scrollto" href="{{route('team')}}">Team</a></li>
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
                <li><a class="getstarted scrollto" href="#about">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>

</header><!-- End Header -->
@endsection

@section('carouselHome')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>ID Academy by PT Inovasi Digital</h1>
                <h2>Short course program for Internship in PT. Inovasi Digital</h2>
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

</section><!-- End Hero -->
@endsection


@section('main')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About ID Academy</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        ID Academy is a short course which is one of the internship programs at PT Inovasi Digital. The short course theme consists of:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Regulation and policy</li>
                        <li><i class="ri-check-double-line"></i> Inovation and new ideas</li>
                        <li><i class="ri-check-double-line"></i> Inovation in ongoing projects</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        ID Academy is a short/mid course held by PT Inovasi Digital for apprentice/pkwt staff. This program raises several topics such as Studies on GHG Emissions, Pattern monitoring, and so on. The output of this program is a report from each team regarding the existing topics.
                    </p>
                    <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="services">
    </div>
    <!-- ======= About Section ======= -->
    <section id="about services" class="about services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Theme and Topic</h2>
                <p>Short/mid course theme and topic</p>
            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <!-- <div class="col-lg-5">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                </div> -->

                <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 d-flex justify-content-center">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab10">Regulation and Policy</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab20">Inovation and News Ideas</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab30">Inovation at Existing Programs</a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab10">
                            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-arch"></i></div>
                                        <h4><a href="#">EUDR & UU Cipta Kerja</a></h4>
                                        <p>EUDR & UU Cipta Kerja Pasal 110A/110B (short course)</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-world"></i></div>
                                        <h4><a href="#">US Forest Act 2021</a></h4>
                                        <p>US Forest Act 2021 Draft Bill (short course)</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                                        <h4><a href="#">Beauty Contest</a></h4>
                                        <p>Beauty Contest (ISCC, RSPO, MSPO dan ISPO) short course</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Tab 1 Content -->

                        <div class="tab-pane row fade show" id="tab20">
                            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-arch"></i></div>
                                        <h4><a href="#">Study on GHG Emissions</a></h4>
                                        <p>Study on GHG Emissions (mid course)</p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab30">
                            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-arch"></i></div>
                                        <h4><a href="#">Next Gen Monitoring</a></h4>
                                        <p>Next Generation of monitoring, liability and recovery (short course)</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-world"></i></div>
                                        <h4><a href="#">Study Pattern Monitoring 5 Years</a></h4>
                                        <p>Study Pattern Monitoring 5 Years (short course)</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                                        <h4><a href="#">100 Ide Lanskap</a></h4>
                                        <p>100 Ide Lanskap</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-inovation">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                                        <h4><a href="#">Ekspedisi Seribu Badai</a></h4>
                                        <p>Ekspedisi Seribu Badai</p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hasil Short Course</h2>
                <p>Recent posts form our short course</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="Arsha/assets/img/bg/bgwl1.jpeg" class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, Juni 27</span>
                            <span class="post-author"> / Argonomis</span>
                        </div>
                        <h3 class="post-title">GHG Emissions</h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="Arsha/assets/img/bg/bgwl2.jpeg" class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, Juni 28</span>
                            <span class="post-author"> / Almaida ayat 28</span>
                        </div>
                        <h3 class="post-title">Study Pattern Monitoring 5th</h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="Arsha/assets/img/bg/bgwl1.jpeg" class="img-fluid" alt=""></div>
                        <div class="meta">
                            <span class="post-date">Tue, Juni 29</span>
                            <span class="post-author"> / Brendon</span>
                        </div>
                        <h3 class="post-title">Beauty Contest</h3>
                        <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= About Section ======= -->
    <div id="timeline"></div>
    <!-- ======= Timeline Section ======= -->
    <section id="about cta" class="about cta">
        <div class="container" data-aos="zoom-out">

            <div class="section-title">
                <h2>Timeline</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div>
                        <time>Maret</time>
                        <p>Outline</p>
                    </div>
                </li>
                <li>
                    <div>
                        <time>April</time>
                        <p>Penulisan Laporan</p>
                    </div>
                </li>
                <li>
                    <div>
                        <time>Mei</time>
                        <p>Hasil/Publikasi</p>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <!-- End Timeline Section -->

    <!-- ======= Services Section ======= -->
    <section id="team" class="team">
    </section>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio services" class="portfolio services" hidden>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tim</h2>
                <p>Tim masing-masing topik short/mid course</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua Tim</li>
                <li data-filter=".filter-ghg">GHG Emissions</li>
                <li data-filter=".filter-eudr">EUDR</li>
                <li data-filter=".filter-us">US Forest Act 2021</li>
                <li data-filter=".filter-beauty">Beauty Contest</li>
                <li data-filter=".filter-pattern">Pattern Monitoring</li>
                <li data-filter=".filter-next">Next Gen Monev</li>
                <li data-filter=".filter-lanskap">100 Ide Lanskap</li>
                <li data-filter=".filter-ekspedisi">Espedisi 1000 Badai</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-next">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Beni</h4>
                            <span hidden>>App Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-beauty filter-next filter-pattern">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Dafa</h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-eudr filter-next">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Caesar</h4>
                            <span hidden>>Data Miner</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-beauty filter-us filter-eudr filter-next filter-pattern filter-lanskap">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Brandy Befany</h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-eudr filter-ekspedisi">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Aji</h4>
                            <span hidden>>Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ekspedisi filter-beauty">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Fatra Handalucy</h4>
                            <span hidden>>FVP Tim</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ekspedisi filter-us">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Usup Ida</h4>
                            <span hidden>>FVP Tim</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-beauty filter-us filter-pattern filter-lanskap">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Haffizh</h4>
                            <span hidden>>Tematik</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-eudr">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Rhida Riskia</h4>
                            <span hidden>>Traceability</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Iqbal</h4>
                            <span hidden>>Traceability</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern filter-beauty">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Jihad</h4>
                            <span hidden>>Corporate</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern filter-beauty">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Bowo</h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-lanskap">
                    <div class="icon-box">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Fitri</h4>
                            <span hidden>>Tematik</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact us</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jalan Tangkuban Perahu no.8</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>beni@inovasidigital.asia</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+82 898 2950 531</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.930342908214!2d106.8026462!3d-6.586777099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5900337fbe1%3A0x41efae520676fac5!2sEarthqualizer%20Foundation!5e0!3m2!1sid!2sid!4v1686042091940!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection

@section('scriptIndex')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Menambahkan <span hidden>> berdasarkan filter saat halaman dimuat
        filterItems();

        // Memperbarui <span hidden>> ketika filter diubah
        $('#portfolio-flters li').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            filterItems(filterValue);
        });

        // Fungsi untuk menambahkan <span hidden>> berdasarkan filter yang dipilih
        function filterItems(filter) {
            $('.portfolio-item').each(function() {
                var filters = $(this).attr('class').split(' ');
                var memberRole = getMemberRole(filters, filter);
                var memberName = $(this).find('.member-info h4').text();

                $(this).find('.member-info span').text(memberRole);
            });
        }

        // Fungsi untuk mendapatkan peran anggota berdasarkan filter
        function getMemberRole(filters, currentFilter) {
            if (filters.includes('filter-ghg') && currentFilter === '.filter-ghg') {
                return 'Ketua';
            }
            if (filters.includes('filter-next') && currentFilter === '.filter-next') {
                return 'Anggota';
            }
            return '';
        }
    });
</script> -->
@endsection