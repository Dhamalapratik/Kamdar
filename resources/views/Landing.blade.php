<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Coco onepage themeforest" />
    <meta name="description" content="Coco - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>KAMDAR</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('Landing/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('Landing/css/style.css') }}" />

</head>

<body>

    <!-- =====================================
    ==== Start Loading -->

    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- End Loading ====
    ======================================= -->


    <!-- =====================================
    ==== Start Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="4">Price</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="10">Contact</a>
                    </li>
                    @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="7">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" data-scroll-nav="8">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" data-scroll-nav="9">Register</a>
                                    </li>
                                @endif
                            @endauth
                    @endif


                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    ======================================= -->


    <!-- =====================================
    ==== Start Header -->

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="7" data-background="img/bg4.jpg"
        data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="text-center caption mt-30">
                <h4>Welcome to </h4>
                <h1>KAAMDAR</h1>
                <div class="row">
                    <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                        <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use
                            digital design & web development services.</p>
                    </div>
                </div>
                <a href="#0" class="butn butn-light mt-30">
                    <span>Get Started</span>
                </a>
            </div>
        </div>
    </header>

    <!-- End Header ====
    ======================================= -->



    <!-- =====================================
        ==== Start Hero -->

    <section class="hero" data-scroll-index="1">
        <div class="section-padding pos-re">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 text-center mb-80">
                        <h4 class="extra-title">About Our <span>Creative</span> Agency</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book It has survived
                            not only five centuries.</p>
                    </div>

                    <div class="feat-item mb-md50 col-lg-4">
                        <div class="text-center">
                            <span class="icon icon-basic-anchor"></span>
                            <h5>Web Design</h5>
                            <h6>Modern & Clean Design</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
                        </div>
                    </div>

                    <div class="feat-item active mb-md50 col-lg-4">
                        <div class="text-center">
                            <span class="icon icon-basic-pencil-ruler"></span>
                            <h5>Development</h5>
                            <h6>Web & Mobile Development</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
                        </div>
                    </div>

                    <div class="feat-item col-lg-4">
                        <div class="text-center">
                            <span class="icon icon-basic-cards-diamonds"></span>
                            <h5>Branding</h5>
                            <h6>Logo & Motion Design</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="curve curve-gray-b curve-bottom"></div>
        </div>

        <div class="tabs-section section-padding bg-gray">
            <div class="container">
                <div class="row">

                    <ul class="col-md-12 nav nav-pills tabs" id="pills-tab" role="tablist">
                        <li class="nav-item one active">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tab1"
                                role="tab" aria-controls="tab1" aria-selected="true">About Us</a>
                        </li>
                        <li class="nav-item two">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab2"
                                role="tab" aria-controls="tab2" aria-selected="false">Our Mission</a>
                        </li>
                        <li class="nav-item three">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab3"
                                role="tab" aria-controls="tab3" aria-selected="false">Why Us?</a>
                        </li>
                    </ul>

                    <div class="tab-content col-lg-12" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="left col-lg-6">
                                    <div class="about box-white">
                                        <h5 class="title">About Us</h5>
                                        <h6 class="sub-title">We Are A Creative Agency</h6>
                                        <p>We’re full service which means we’ve got you covered on design and content
                                            right through to digital.</p>

                                        <!-- Skills -->

                                        <div class="skills mt-40">
                                            <div class="skill-item mb-30">
                                                <h6>Web Design</h6>
                                                <div class="skill-progress">
                                                    <div class="progres" data-value="90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item mb-30">
                                                <h6>Branding</h6>
                                                <div class="skill-progress">
                                                    <div class="progres" data-value="75%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Development</h6>
                                                <div class="skill-progress">
                                                    <div class="progres" data-value="80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 image">
                                    <div class="img">
                                        <img src="img/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="left col-lg-6">
                                    <div class="mission box-white">
                                        <h5 class="title">Our Mission</h5>
                                        <h6 class="sub-title">We Are A Creative Agency</h6>
                                        <p class="mb-10"><b>We’re full service which means</b> we’ve got you covered
                                            on design and content right through to digital. You’ll form a lasting
                                            relationship with us, <b>collaboration is central to</b> everything we do.
                                            <b>We’ll push you out of</b> your comfort zone from time, but this is where
                                            you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                                        <p>You’ll form a lasting relationship with us, collaboration is central to
                                            everything we do. We’ll push you out of your comfort zone from time-to-time,
                                            but this is where you’ll shine. Bottom line is we want you to succeed at
                                            Faculty.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 image">
                                    <div class="img">
                                        <img src="img/3.jpg" alt="">
                                        <a class="vid" href="https://vimeo.com/127203262">
                                            <span class="vid-butn">
                                                <i class="fas fa-play-circle"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="left col-lg-6">
                                    <div class="why-us box-white">
                                        <h5 class="title">Why Choose Us?</h5>
                                        <h6 class="sub-title">We Are A Creative Agency</h6>
                                        <p>We’re full service which means we’ve got you covered on design and content
                                            right through to digital.You’ll form a lasting relationship with us,
                                            collaboration is central to everything we do.</p>
                                        <ul class="feat mt-30 row">
                                            <li class="col-sm-4">
                                                <span class="icon icon-basic-display"></span>
                                                <h6>Perfect Design</h6>
                                            </li>
                                            <li class="col-sm-4">
                                                <span class="icon icon-basic-picture-multiple"></span>
                                                <h6>Retina Ready</h6>
                                            </li>
                                            <li class="col-sm-4">
                                                <span class="icon icon-basic-headset"></span>
                                                <h6>Friendly Support</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 image">
                                    <div class="img owl-carousel owl-theme carousel-single">
                                        <img src="img/4.jpg" alt="">
                                        <img src="img/5.jpg" alt="">
                                        <img src="img/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Hero ====
        ======================================= -->


    <!-- =====================================
        ==== Start Process -->

    <div class="process section-padding bg-img bg-fixed pos-re text-center" data-overlay-dark="7"
        data-background="img/bg6.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Our</span> Process</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>
                <div class="full-width clearfix"></div>

                <div class="col-lg-3 col-md-6">
                    <div class="item first mb-md50">
                        <img src="img/arrow.png" class="tobotm" alt="">
                        <span class="icon icon-basic-lightbulb"></span>
                        <div class="cont">
                            <h3>01</h3>
                            <h6>Ideas</h6>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item odd mb-md50">
                        <img src="img/arrow.png" alt="">
                        <span class="icon icon-basic-book-pencil"></span>
                        <div class="cont">
                            <h3>02</h3>
                            <h6>Planning</h6>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item mb-sm50">
                        <img src="img/arrow.png" class="tobotm" alt="">
                        <span class="icon icon-basic-pencil-ruler"></span>
                        <div class="cont">
                            <h3>03</h3>
                            <h6>Development</h6>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item odd">
                        <span class="icon icon-basic-server-upload"></span>
                        <div class="cont">
                            <h3>04</h3>
                            <h6>Testing</h6>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="curve curve-gray-t curve-top"></div>
        <div class="curve curve-bottom"></div>
    </div>

    <!-- End Process ====
        ======================================= -->


    <!-- =====================================
        ==== Start Works -->

    <section class="works section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Creative</span> Portfolio</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center mb-30 col-sm-12">
                    <div class="filter">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Brand</span>
                        <span data-filter='.web'>Design</span>
                        <span data-filter='.graphic'>Graphic</span>
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/1.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/1.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/2.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/2.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/3.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/3.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/4.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/4.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/5.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/5.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/6.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/6.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/7.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/7.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/8.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Logo | Branding</p>
                                    <h6>Creative Web Design</h6>
                                    <a href="img/portfolio/8.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- End Works ====
        ======================================= -->


    <!-- =====================================
        ==== Start Why-us -->

    <div class="why-us section-padding bg-gray pos-re">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="img mb-md50">
                        <img src="img/1.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content pt-10">
                        <div class="item mb-40">
                            <span class="icon icon-basic-display"></span>
                            <div class="cont">
                                <h5>Fully Responsive</h5>
                                <p>Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat velit class
                                    aptent taciti sociosqu.</p>
                            </div>
                        </div>
                        <div class="item mb-40">
                            <span class="icon icon-basic-bolt"></span>
                            <div class="cont">
                                <h5>Clean & Modern Design</h5>
                                <p>Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat velit class
                                    aptent taciti sociosqu.</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-headset"></span>
                            <div class="cont">
                                <h5>Friendly Support</h5>
                                <p>Nulla metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat velit class
                                    aptent taciti sociosqu.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="curve curve-top"></div>
        <div class="curve curve-bottom"></div>
    </div>

    <!-- End Why-us ====
        ======================================= -->


    <!-- =====================================
        ==== Start Teams -->

    <section class="team section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Talent</span> Team</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/1.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/2.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/3.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/4.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/3.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Teams ====
        ======================================= -->



    <!-- =====================================
        ==== Start Testimonials -->

    <section class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="7"
        data-background="img/bg4.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>What's <span>Clients</span> Says?</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="owl-carousel owl-theme text-center col-lg-10 offset-lg-1">
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/1.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/2.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/3.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/4.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="curve curve-top"></div>
    </section>

    <!-- End Testimonials ====
        ======================================= -->


    <!-- =====================================
        ==== Start Price -->

    <section class="price section-padding bg-gray pos-re" data-scroll-index="4">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>Pricing <span>Table</span></h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="pricing-tables text-center full-width">

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="item mb-md50">
                                <div class="type">
                                    <h4>Free</h4>
                                </div>

                                <div class="value">
                                    <h3><span>$</span>00</h3>
                                    <span class="per">/ Month</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>10 GB Disk Space</li>
                                        <li>15 Domain Names</li>
                                        <li>4 Email Address</li>
                                        <li>Enhanced Security</li>
                                        <li>Unlimited Support</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bg">
                                        <span>Purchase Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="item mb-md50">
                                <div class="type">
                                    <h4>Basic</h4>
                                </div>

                                <div class="value">
                                    <h3><span>$</span>10</h3>
                                    <span class="per">/ Month</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>10 GB Disk Space</li>
                                        <li>15 Domain Names</li>
                                        <li>4 Email Address</li>
                                        <li>Enhanced Security</li>
                                        <li>Unlimited Support</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bg">
                                        <span>Purchase Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="item active mb-md50">

                                <div class="type">
                                    <h4>Standard</h4>
                                </div>

                                <div class="value">
                                    <h3><span>$</span>30</h3>
                                    <span class="per">/ Month</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>100 GB Disk Space</li>
                                        <li>30 Domain Names</li>
                                        <li>5 Email Address</li>
                                        <li>Enhanced Security</li>
                                        <li>Unlimited Support</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-light">
                                        <span>Purchase Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="item">
                                <div class="type">
                                    <h4>Premium</h4>
                                </div>

                                <div class="value">
                                    <h3><span>$</span>80</h3>
                                    <span class="per">/ Month</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>500 GB Disk Space</li>
                                        <li>100 Domain Names</li>
                                        <li>10 Email Address</li>
                                        <li>Enhanced Security</li>
                                        <li>Unlimited Support</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bg">
                                        <span>Purchase Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="curve curve-bottom"></div>
    </section>

    <!-- End Price ====
        ======================================= -->


    <!-- =====================================
        ==== Start Blog -->

    <section class="blog section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Latest</span> News</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>
                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-4">
                    <div class="item">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Blog ====
        ======================================= -->


    <!-- =====================================
        ==== Start Call-Action -->

    <section class="call-action section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/bg2.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Want to work with us?</h2>
                        <h5>Tell us about your project</h5>
                        <a href="#0" class="butn butn-bg">
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Call-Action ====
        ======================================= -->


    <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>Get <span>In</span> Touch</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info mb-md50">
                        <h5>Contact Us :</h5>
                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        <div class="item">
                            <span class="icon icon-basic-tablet"></span>
                            <div class="cont">
                                <h6>Phone : </h6>
                                <p>+20 010 251 789 18 , 251 789 18</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-mail-open-text"></span>
                            <div class="cont">
                                <h6>Email : </h6>
                                <p>Coco_support@website.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-geolocalize-05"></span>
                            <div class="cont">
                                <h6>Address : </h6>
                                <p>4655 Carter Street ,Olney, Illinois</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post"
                        action="http://innovationplans.com/idesign/coco3/contact.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- End Contact ====
        ======================================= -->


    <!-- =====================================
        ==== Start Footer -->

    <footer class="text-center pos-re">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a>

            <div class="social">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                <a href="#0"><i class="fab fa-behance"></i></a>
                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
            </div>

            <p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
        </div>

        <div class="curve curve-top curve-center"></div>
    </footer>

    <!-- End Footer ====
        ======================================= -->





    <!-- jQuery -->
    <script src="{{ asset('Landing/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('Landing/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- popper.min -->
    <script src="{{ asset('Landing/js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('Landing/js/bootstrap.min.js') }}"></script>

    <!-- scrollIt -->
    <script src="{{ asset('Landing/js/jquery.waypoints.min.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ asset('Landing/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.magnific-popup js -->
    <script src="{{ asset('Landing/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- stellar js -->
    <script src="{{ asset('Landing/js/jquery.stellar.min.js') }}"></script>

    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('Landing/js/isotope.pkgd.min.js') }}"></script>

    <!-- YouTubePopUp.jquery -->
    <script src="{{ asset('Landing/js/YouTubePopUp.jquery.js') }}"></script>

    <!-- validator js -->
    <script src="{{ asset('Landing/js/validator.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('Landing/js/scripts.js') }}"></script>

</body>

</html>
