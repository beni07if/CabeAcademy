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

    /* Menyembunyikan #portfolio-flters1 pada tampilan mobile */
    @media (max-width: 767px) {
        .desktop {
            display: none;
        }
    }

    /* Menyembunyikan #portfolio-flters2 pada tampilan desktop */
    @media (min-width: 768px) {
        .mobile {
            display: none;
        }
    }
</style>

@endsection

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">

    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('index')}}#home">Cabe Academy</a></h1>
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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio team" class="portfolio team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <p>Anggota masing-masing topik short/mid course</p>
            </div>
            <div class="desktop">
                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua Tim (13)</li>
                    <li data-filter=".filter-ghg">GHG Emissions (5)</li>
                    <li data-filter=".filter-eudr">EUDR & UU Ciptaker(4)</li>
                    <li data-filter=".filter-us">US Forest Act 2021 (3)</li>
                    <li data-filter=".filter-beauty">Beauty Contest (6)</li>
                    <li data-filter=".filter-pattern">Pattern Monitoring (6)</li>
                    <li data-filter=".filter-next">Next Gen Monev (4)</li>
                    <li data-filter=".filter-lanskap">100 Ide Lanskap (3)</li>
                    <li data-filter=".filter-ekspedisi">Espedisi 1000 Badai (3)</li>
                </ul>
            </div>

            <div class="mobile">
                <ul id="portfolio-flters" class="swiper-container d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <li data-filter="*" class="filter-active swiper-slide">Semua Tim (13)</li>
                        <li data-filter=".filter-ghg" class="swiper-slide">GHG Emissions (5)</li>
                        <li data-filter=".filter-eudr" class="swiper-slide">EUDR &amp; UU Ciptaker(4)</li>
                        <li data-filter=".filter-us" class="swiper-slide">US Forest Act 2021 (3)</li>
                        <li data-filter=".filter-beauty" class="swiper-slide">Beauty Contest (6)</li>
                        <li data-filter=".filter-pattern" class="swiper-slide">Pattern Monitoring (6)</li>
                        <li data-filter=".filter-next" class="swiper-slide">Next Gen Monev (4)</li>
                        <li data-filter=".filter-lanskap" class="swiper-slide">100 Ide Lanskap (3)</li>
                        <li data-filter=".filter-ekspedisi" class="swiper-slide">Espedisi 1000 Badai (3)</li>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </ul>
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
                            <h4>Al maida ayat 2</h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-beauty filter-us filter-eudr filter-next filter-pattern filter-lanskap">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/brandy2.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Brendon </h4>
                            <span hidden>>Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-eudr filter-ekspedisi">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/aji.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Pak Aji</h4>
                            <span hidden>>Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ekspedisi filter-beauty">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/fatra.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Fatra Handalan ucy</h4>
                            <span hidden>>FVP Tim</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ekspedisi filter-us">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/usup.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Cup cup</h4>
                            <span hidden>>FVP Tim</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-beauty filter-us filter-pattern filter-lanskap">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/hafis2.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Haffizahullah</h4>
                            <span hidden>>Tematik</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-eudr">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/ridha.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Rhida Riskia</h4>
                            <span hidden>>Traceability</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/iqbal.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Iqbal M.I</h4>
                            <span hidden>>Traceability</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern filter-beauty">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/jihad3.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Jihad Fii Sabilillah</h4>
                            <span hidden>>Corporate</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-pattern filter-beauty">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/bowo.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Santai wo</h4>
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
                            <h4>Fitri</h4>
                            <span hidden>>Tematik</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-ghg filter-eudr filter-next">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset('Arsha/assets/img/team/cesar3.jpeg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Argonomis S.P. S.Hut.</h4>
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false,
            },
        });
    });
</script>
@endsection