@extends('layout.master')

@section('stylei')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .team-member {
        height: 90%;
        /* padding: 2px 2px 2px 2px; */
    }

    .member-img {
        width: 100%;
        /* Dimensi kotak crop */
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .member-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }


    .member-info {
        padding-top: 20px;

    }

    #hero .container {
        height: 50%;
    }

    /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
    .team .team-member .member-img {
        border-radius: 8px;
        overflow: hidden;
    }

    .team .team-member .social {
        position: absolute;
        left: 0;
        top: -18px;
        right: 0;
        opacity: 0;
        transition: ease-in-out 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .team .team-member .social a {
        transition: color 0.3s;
        color: var(--color-white);
        background: var(--color-primary);
        margin: 0 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        transition: 0.3s;
    }

    .team .team-member .social a i {
        line-height: 0;
        font-size: 16px;
    }

    .team .team-member .social a:hover {
        background: var(--color-primary-light);
    }

    .team .team-member .social i {
        font-size: 18px;
        margin: 0 2px;
    }

    .team .team-member .member-info {
        /* padding: 20px 15px; */
        padding-bottom: 50px;
        text-align: center;
        /* box-shadow: 0px 2px 15px rgba(var(--color-black-rgb), 0.1); */
        box-shadow: 0px 2px 15px grey;
        /* background: var(--color-white); */
        background: #ffffff;
        margin: -30px 20px 0 20px;
        position: relative;
        height: 30px;
        border-radius: 8px;
    }

    .team .team-member .member-info h4 {
        font-weight: 400;
        margin-bottom: 5px;
        font-size: 24px;
        color: var(--color-secondary);
    }

    .team .team-member .member-info span {
        display: block;
        font-size: 16px;
        font-weight: 400;
        color: var(--color-gray);
    }

    .team .team-member .member-info p {
        font-style: italic;
        font-size: 14px;
        line-height: 26px;
        color: var(--color-gray);
    }

    .team .team-member:hover .social {
        opacity: 1;
    }

    /* Gaya untuk tampilan desktop */
    #portfolio-flters {
        display: flex;
        justify-content: center;
        /* Gaya lainnya yang diperlukan */
    }

    @media (max-width: 767px) {
        #portfolio-flters {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            /* Untuk performa scroll yang lebih baik di perangkat mobile */
        }

        #portfolio-flters li {
            flex: 0 0 auto;
            margin-right: 10px;
            /* Atur jarak antara elemen-elemen */
        }
    }

    /*--------------------------------------------------------------
# Resume
--------------------------------------------------------------*/
    .resume .resume-title {
        font-size: 26px;
        font-weight: 400;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #222222;
    }

    .resume .resume-item {
        padding: 0 0 20px 20px;
        margin-top: -2px;
        border-left: 2px solid #34b7a7;
        position: relative;
    }

    .resume .resume-item h4 {
        line-height: 18px;
        font-size: 18px;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
        color: #1d685f;
        margin-bottom: 10px;
    }

    .resume .resume-item h5 {
        font-size: 16px;
        background: #effbf9;
        padding: 5px 15px;
        display: inline-block;
        font-weight: 600;
        margin-bottom: 10px;
        color: #34b7a7;
    }

    .resume .resume-item ul {
        padding-left: 20px;
    }

    .resume .resume-item ul li {
        padding-bottom: 10px;
    }

    .resume .resume-item:last-child {
        padding-bottom: 0;
    }

    .resume .resume-item::before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50px;
        left: -9px;
        top: 0;
        background: #fff;
        border: 2px solid #34b7a7;
    }
</style>
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
                <li><a class="getstarted scrollto" href="#about">Login</a></li>
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

</section><!-- End Hero -->
@endsection

@section('main')
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="team" class="team">
    </section>
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Study on GHG Emissions</h2>
                <p>Study on GHG Emissions is mid course at PT Inovasi Digital with explore about source and calculation emission in palm oil industries.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Study on GHG Emissions</h3>
                    <div class="resume-item pb-0">
                        <h4>Summary</h4>
                        <p><em>Based on the results of a brief study on GHG calculations in the palm oil industry, several gaps were found which became a concern, in particular the results of emission calculations carried out by the Certification Body in the RSPO Audit Report were many which were incomplete.</em></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Report Progress</h3>
                    <div class="resume-item">
                        <h4>Outline draf</h4>
                        <h5>March</h5>
                        <!-- <p><em>Experion, New York, NY </em></p> -->
                        <p>
                        <ul>
                            <li>Outline discussion with internal team</li>
                            <li>Outline draf</li>
                        </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Report writing</h4>
                        <h5>April-June, 2023</h5>
                        <!-- <p><em>Stepping Stone Advertising, New York, NY</em></p> -->
                        <p>
                        <ul>
                            <li>Report discussion with internal team</li>
                            <li>Draf report</li>
                        </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Final report</h4>
                        <h5>June, 2023</h5>
                        <!-- <p><em>Stepping Stone dfsadfAdvertising, New York, NY</em></p> -->
                        <p>
                        <ul>
                            <li>Report</li>
                            <li>Slide presentation</li>
                        </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Publication</h4>
                        <h5>July, 2023</h5>
                        <p><em>Published on social media:</em></p>
                        <p>
                        <ul>
                            <li>Instagram and Linkedin</li>
                            <li>Website ID Academy</li>
                            <li>Other</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio team" class="portfolio team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <!-- <p>Anggota masing-masing topik short/mid course</p> -->
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-next">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/beni.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Beni</h4>
                            <span hidden>>App Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-beauty filter-next filter-pattern">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/dafa.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Dafa Almaida</h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-lanskap">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/fitri2.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Fitriana</h4>
                            <span hidden>>Tematik</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-eudr filter-next">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/cesar5.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Caesar Argo S.P. S.Hut.</h4>
                            <span hidden>>Data Miner</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection

@section('scriptIndex')

@endsection