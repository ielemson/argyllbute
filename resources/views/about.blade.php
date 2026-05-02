<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Argyll and Bute Ltd">
    <meta name="keywords"
        content="Argyll and Bute, energy solutions, oil and gas, renewable energy, engineering services, sustainability, infrastructure, industrial services">
    <meta name="description"
        content="Argyll and Bute Ltd delivers innovative energy, engineering, and infrastructure solutions across oil, gas, and renewable sectors with a commitment to sustainability and excellence.">

    <!-- Title -->
    <title>Argyll and Bute Ltd | Energy, Engineering & Sustainable Solutions</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/logos/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logos/og-image.jpg') }}">

    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Argyll and Bute Ltd | Energy & Engineering Solutions">
    <meta property="og:description"
        content="Delivering reliable oil, gas, and renewable energy solutions with innovation, sustainability, and technical excellence.">
    <meta property="og:image" content="{{ asset('img/logos/og-image.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Argyll and Bute Ltd">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Argyll and Bute Ltd | Energy & Engineering Solutions">
    <meta name="twitter:description"
        content="Reliable energy and infrastructure solutions across oil, gas, and renewables.">
    <meta name="twitter:image" content="{{ asset('img/logos/og-image.jpg') }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#1d1f21">

    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- Search CSS -->
    <link rel="stylesheet" href="{{ asset('search/search.css') }}">

    <!-- Quform CSS -->
    <link rel="stylesheet" href="{{ asset('quform/css/base.css') }}">

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">

    <!-- Theme Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- PAGE LOADING
================================================== -->
    <div id="preloader"></div>
    <!-- MAIN WRAPPER
================================================== -->
    <div class="main-wrapper">
        <!-- HEADER
================================================== -->
        <header class="header-style1 menu_area-light">
            <div class="navbar-default border-none">
                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <!-- Logo -->
                                    <div class="navbar-header navbar-header-custom">
                                        <a href="{{ route('home') }}" class="navbar-brand">
                                            <img src="{{ asset('img/logos/logo-inner.png') }}" alt="Argyll and Bute">
                                        </a>
                                    </div>
                                    <div class="navbar-toggler"></div>
                                    <!-- Navigation -->
                                    <ul class="navbar-nav ms-auto" id="nav">
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                                            <a href="{{ route('services.index') }}">Services</a>
                                        </li>
                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- CTA -->
                                    <div class="attr-nav ms-xl-auto">
                                        <ul>
                                          
                                            <li class="d-none d-xl-inline-block">
                                                <a href="{{ route('contact') }}" class="btn-style1 medium text-white">
                                                    Get a Quote
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- PAGE TITLE
================================================== -->
        <section class="page-title-section bg-img cover-background dark-overlay top-position" data-overlay-dark="6"
            data-background="img/banner/page-title.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3">About Us</h1>
                        <ul>
                            <li><a href="{{ route("home") }}">Home</a></li>
                            <li><a href="#!">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="line-animated">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="p-1-9 p-sm-2-3 bg-white bottom-0 left d-inline-block position-absolute z-index-3"></div>
            {{-- <div class="position-absolute shape-1 d-none d-sm-block"></div> --}}
            <div class="px-6 px-sm-9 py-3 py-sm-4 bg-white bottom-0 right d-inline-block position-absolute z-index-3">
            </div>
        </section>
<!-- ABOUT
================================================== -->
<section class="pb-0 overflow-visible">
    <div class="container position-relative">
        <div class="row align-items-center">

            <!-- About Images -->
            <div class="col-lg-6 mb-5 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                <div class="position-relative about-style-02 ps-sm-10 pt-sm-12 pb-sm-6">
                    <div class="position-relative">
                        <img src="img/content/about2.jpg" class="z-index-1 position-relative" alt="Argyll and Bute energy infrastructure">
                     
                    </div>

                    {{-- <img src="img/content/about3.jpg" alt="Argyll and Bute engineering operations" class="position-absolute top-0 left z-index-2 d-none d-sm-block"> --}}

                    {{-- <div class="d-inline-block p-6 bg-secondary top-10 opacity3 z-index-0 right-20 position-absolute"></div> --}}
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                <div>
                    <div class="section-title">
                        <span>About Us</span>
                    </div>

                    <h2 class="h1 mb-4 mt-2 z-index-2 position-relative">
                       Engineering the Future 
                    </h2>

                    <p class="mb-1-9">
                        Argyll and Bute Ltd is committed to providing reliable energy, engineering, and infrastructure solutions that support industrial growth, sustainable development, and the global transition toward cleaner energy systems. We combine technical expertise, innovation, and strong project delivery capacity to serve clients across oil, gas, renewable energy, and infrastructure sectors.
                    </p>

                    <p class="mb-1-9">
                        Our approach is built on safety, quality, efficiency, and long-term value creation. From advisory and feasibility support to project development, engineering coordination, and implementation oversight, we help organisations achieve practical and future-ready energy outcomes.
                    </p>

                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d-flex align-items-center bg-light p-3 mb-4">
                                <i class="fa-solid fa-circle-check display-20 text-secondary"></i>
                                <span class="ms-3 text-dark fw-bold">Renewable Energy Development</span>
                            </div>

                            <div class="d-flex align-items-center bg-light p-3">
                                <i class="fa-solid fa-circle-check display-20 text-secondary"></i>
                                <span class="ms-3 text-dark fw-bold">Energy Infrastructure</span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-light p-3 mb-4">
                                <i class="fa-solid fa-circle-check display-20 text-secondary"></i>
                                <span class="ms-3 text-dark fw-bold">Project Management</span>
                            </div>

                            <div class="d-flex align-items-center bg-light p-3">
                                <i class="fa-solid fa-circle-check display-20 text-secondary"></i>
                                <span class="ms-3 text-dark fw-bold">Consulting & Advisory</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- PROCESS
================================================== -->
<section>
    <div class="container">

        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeInUp" data-wow-delay="200ms">
            <span>Working Process</span>
            <h2 class="mb-0 h1 mt-2">How We Deliver Value</h2>
        </div>

        <div class="row mt-n1-9">

            <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                <div class="process-style-01">
                    <div class="process-block">
                        <div class="process-icon">
                            <i class="fa-solid fa-lightbulb display-13 text-white"></i>
                        </div>
                        <div class="process-count">
                            <span>1</span>
                        </div>
                    </div>
                    <h3 class="mb-0 h4 text-center">Strategy & Concept</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="300ms">
                <div class="process-style-01">
                    <div class="process-block">
                        <div class="process-icon">
                            <i class="fa-solid fa-chart-line display-13 text-white"></i>
                        </div>
                        <div class="process-count">
                            <span>2</span>
                        </div>
                    </div>
                    <h3 class="mb-0 h4 text-center">Planning & Feasibility</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                <div class="process-style-01">
                    <div class="process-block">
                        <div class="process-icon">
                            <i class="fa-solid fa-gears display-13 text-white"></i>
                        </div>
                        <div class="process-count">
                            <span>3</span>
                        </div>
                    </div>
                    <h3 class="mb-0 h4 text-center">Engineering & Design</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="500ms">
                <div class="process-style-01">
                    <div class="process-block">
                        <div class="process-icon">
                            <i class="fa-solid fa-helmet-safety display-13 text-white"></i>
                        </div>
                        <div class="process-count">
                            <span>4</span>
                        </div>
                    </div>
                    <h3 class="mb-0 h4 text-center">Execution & Delivery</h3>
                </div>
            </div>

        </div>
    </div>

    <div class="position-absolute bottom-0 left-n10 d-none d-xxl-block wow fadeIn" data-wow-delay="100ms">
        <figure class="img-windmolen">
            <!-- keep your existing SVG here -->
        </figure>
    </div>
</section>

        <!-- FOOTER
================================================== -->
        @include('partials.footer')

    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar -->
    <script src="{{ asset('js/jquery.scrollbar.min.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('js/core.min.js') }}"></script>

    <!-- Search -->
    <script src="{{ asset('search/search.js') }}"></script>

    <!-- Quform Plugins -->
    <script src="{{ asset('quform/js/plugins.js') }}"></script>

    <!-- Quform Scripts -->
    <script src="{{ asset('quform/js/scripts.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
