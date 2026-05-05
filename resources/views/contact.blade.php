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
                        <h1 class="display-3">Contact Us</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">Contact Us</a></li>
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

        <!-- CONTACT FORM
================================================== -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="pe-lg-1-9">
                            <!-- Location -->
                            <div class="card card-style-03 mb-1-9">
                                <div class="card-body p-1-6 p-sm-1-9">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i
                                                class="fas fa-map-marker-alt text-secondary display-8 position-relative"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white">Location</h4>
                                            <span class="text-white opacity7">
                                               Elsley Court, Great Titchfield Street, London, UK
                                            </span>
                                        </div>
                                    </div>
                                    <i class="fas fa-map-marker-alt bg-icon"></i>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="card card-style-03 mb-1-9">
                                <div class="card-body p-1-6 p-sm-1-9">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-phone-alt text-secondary display-8 position-relative"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white">Phone Number</h4>
                                            <span class="d-block text-white opacity7">(+44) 7785 386025</span>
                                            {{-- <span class="text-white opacity7">(+1) 234-567-9874</span> --}}
                                        </div>
                                    </div>
                                    <i class="fas fa-phone-alt bg-icon"></i>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="card card-style-03">
                                <div class="card-body p-1-6 p-sm-1-9">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-envelope text-secondary display-8 position-relative"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white">Email Address</h4>
                                            <span class="d-block text-white opacity7">info@argyllebuteenergy.co.uk</span>
                                            {{-- <span class="text-white opacity7">support@argyllbutegreenenergy.co.uk</span> --}}
                                        </div>
                                    </div>
                                    <i class="fas fa-envelope bg-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="mb-4">Contact Us</h2>
                        <form class="contact quform" 
                            enctype="multipart/form-data" onclick="">
                            <div class="quform-elements">
                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text"
                                                    name="name" placeholder="Your name here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="text"
                                                    name="email" placeholder="Your email here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text"
                                                    name="subject" placeholder="Your subject here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text"
                                                    name="phone" placeholder="Your phone here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Captcha element -->
                                    <div class="col-md-12">
                                        <div class="quform-element">
                                            <div class="form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="type_the_word" type="text"
                                                        name="type_the_word" placeholder="Type the below word" />
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- End Captcha element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="btn-style1" type="button">Send Message</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span
                                                class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT INFO
================================================== -->
        <section class="p-0 bg-light">
            <div class="container-fuild">
                <iframe class="contact-map" id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.778673703344!2d-0.14247842451419976!3d51.51727637181551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2a895a3073%3A0xbed9f51709d92762!2sElsley%20House!5e0!3m2!1sen!2sng!4v1777714040085!5m2!1sen!2sng"></iframe>
            </div>
        </section>
{{-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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

    
    <script>
    window.siteLogos = {
        inner: "{{ asset('img/logos/logo-inner.png') }}",
        main: "{{ asset('img/logos/logo.png') }}"
    };
</script>
    <!-- Custom Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
