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
            data-background="{{ asset("img/banner/page-title.jpg") }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3">Services Us</h1>
                        <ul>
                            <li><a href="{{ route("home") }}">Home</a></li>
                            <li><a href="#!">Services Us</a></li>
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

      <!-- SERVICES
================================================== -->
<section class="bg-light">
    <div class="container">

        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeInUp" data-wow-delay="200ms">
            <span>Our Services</span>
            <h2 class="mb-0 h1 mt-2">Our Company Solutions</h2>
        </div>

        <div class="row gx-xxl-5 mt-n1-9">

            @forelse($services as $index => $service)
                @php
                    $delay = 200 + (($index % 3) * 100);
                    $image = $service->image 
                        ? asset($service->image) 
                        : asset('img/service/default.jpg');

                    $icon = $service->icon ?? 'fa-solid fa-bolt';
                @endphp

                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="{{ $delay }}ms">
                    <div class="card-style-01">

                        <img src="{{ $image }}" alt="{{ $service->title }}">

                        <div class="card-content">
                            <div class="content-inner">
                                <h3 class="mb-0 h5">
                                    <a href="{{ route('services.show', $service->slug) }}">
                                        {{ $service->title }}
                                    </a>
                                </h3>

                                <i class="{{ $icon }} display-13 text-secondary lh-1"></i>
                            </div>
                        </div>

                        <div class="card-content-hover">
                            <div class="content-inner">
                                <i class="{{ $icon }} display-13 text-white mb-2 d-block"></i>

                                <h3 class="h4 mb-3">
                                    <a href="{{ route('services.show', $service->slug) }}" class="text-white">
                                        {{ $service->title }}
                                    </a>
                                </h3>

                                <p class="mb-0 text-white opacity9">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($service->description), 120) }}
                                </p>
                            </div>

                            <div class="card-background">
                                <img src="{{ $image }}" alt="{{ $service->title }}">
                            </div>
                        </div>

                    </div>
                </div>

            @empty
                <div class="col-12 text-center">
                    <p class="mb-0">No services available at the moment.</p>
                </div>
            @endforelse

        </div>

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
