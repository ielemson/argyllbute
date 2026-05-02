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

    <!-- Plugins CSS -->
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
        @include('partials.header')
        <!-- BANNER
================================================== -->
        @include('partials.banner')
        <!-- ABOUT US
================================================== -->
        <section class="about-style-03 pb-1-6 pb-lg-5 pt-0">
            <div class="container">
                <div class="row align-items-center mt-n1-9">
                    <div class="col-lg-6 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="text-center position-relative d-flex justify-content-center align-items-center">
                            <img src="img/content/about4.jpg" alt="Argyll and Bute Green Energy">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-6 mt-2-2 mt-sm-12 mt-lg-1-9 wow fadeIn" data-wow-delay="300ms">
                        <div class="ps-lg-1-9 ps-xl-10">
                            <div class="section-title-01 mb-1-9">
                                <span
                                    class="text-secondary text-uppercase small letter-spacing-4 d-block mb-2 font-weight-600">
                                    About Us
                                </span>
                                <h2 class="mb-0 h1">
                                    Sustainable Energy for a Changing World
                                </h2>
                            </div>
                            <p class="w-90">
                                Argyll and Bute Green Energy Ltd is a UK-based company focused on delivering
                                renewable energy solutions, infrastructure development, and efficient energy systems
                                to support long-term sustainability and economic growth.
                            </p>
                            <div class="row border-top mt-1-9 pt-1-9 mb-2-9">
                                <div class="col-sm-6 col-lg-6 mb-1-9 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="fas fa-leaf text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="h5 mb-0">Clean Energy Focus</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6 mb-1-9 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="fas fa-bolt text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="h5 mb-0">Reliable Systems</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- New Highlight 1 -->
                                <div class="col-sm-6 col-lg-6 mb-1-9 mb-sm-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="fas fa-shield-alt text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="h5 mb-0">Safety & Compliance</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- New Highlight 2 -->
                                <div class="col-sm-6 col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="fas fa-users-cog text-primary"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="h5 mb-0">Expert Team</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY CHOOSE US
================================================== -->
        <section class="bg-dark mt-5">
            <div class="container">
                <div class="row align-items-xl-center mt-n1-9">

                    <!-- Images -->
                    <div class="col-lg-6 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div>
                            <div class="row mt-n1-9">
                                <div class="col-7 mt-1-9">
                                    <div class="mb-1-9">
                                        <img src="img/content/why-choose-04.jpg" alt="Energy infrastructure solutions"
                                            class="w-100">
                                    </div>
                                    <div>
                                        <img src="img/content/why-choose-05.jpg" alt="Renewable energy systems"
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="col-5 mt-1-9">
                                    <img src="img/content/why-choose-06.jpg" alt="Engineering excellence"
                                        class="h-100 w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-6 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                        <div class="ps-lg-1-9 ps-xl-2-9 ps-xxl-9">
                            <div class="section-title-01 mb-1-9">
                                <span
                                    class="text-secondary text-uppercase small letter-spacing-4 d-block mb-2 fw-bold">
                                    Why Choose Us
                                </span>
                                <h2 class="mb-0 h1 text-white">
                                    Delivering Reliable Energy & Engineering Solutions
                                </h2>
                            </div>
                            <!-- Key Feature -->
                            <div class="d-flex mb-1-9">
                                <div class="flex-shrink-0 pe-4">
                                    <img src="img/icons/icon-03.png" alt="Expert team">
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="h5 text-white fw-bold">Industry Expertise & Innovation</h4>
                                    <p class="mb-0 text-white opacity7">
                                        With deep experience across oil, gas, and renewable energy, we deliver
                                        innovative,
                                        efficient, and scalable solutions tailored to evolving global energy demands.
                                    </p>
                                </div>
                            </div>
                            <!-- Bullet Points -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="pe-xxl-3">
                                        <ul class="list-style2">
                                            <li class="text-white opacity7">
                                                Proven track record in energy and infrastructure delivery.
                                            </li>
                                            <li class="text-white opacity7">
                                                Commitment to sustainability and environmental responsibility.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <ul class="list-style2">
                                            <li class="text-white opacity7">
                                                Reliable, cost-effective, and timely project execution.
                                            </li>
                                            <li class="text-white opacity7">
                                                Strong focus on safety, compliance, and quality standards.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES
================================================== -->
        <section class="bg-light">
            <div class="container">

                <div class="section-title-01 text-center mb-2-9 wow fadeInUp" data-wow-delay="200ms">
                    <span class="text-secondary text-uppercase small letter-spacing-4 d-block mb-2 fw-bold">
                        Our Services
                    </span>
                    <h2 class="mb-0 h1 mt-2">We Offer Diverse Energy & Engineering Solutions</h2>
                </div>
                <div class="row g-xl-5 mt-n1-9">
                    @php
                        $icons = [
                            'Renewable Energy Development' => 'fa-solid fa-solar-panel',
                            'Energy Infrastructure & Engineering' => 'fa-solid fa-industry',
                            'Energy Transition Solutions' => 'fa-solid fa-arrows-rotate',
                            'Energy Consulting & Advisory' => 'fa-solid fa-chart-line',
                            'Project Development & Management' => 'fa-solid fa-diagram-project',
                            'Sustainability & Environmental Solutions' => 'fa-solid fa-leaf',
                        ];
                    @endphp
                    @forelse($services as $index => $service)
                        <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn"
                            data-wow-delay="{{ 200 + $index * 200 }}ms">
                            <div class="card-style-06 h-100">
                                <!-- Image -->
                                <div class="position-relative">
                                    <img src="{{ asset($service->image ?? 'img/service/default.jpg') }}"
                                        alt="{{ $service->title }}" class="w-100">
                                    <div class="service-icon">
                                        <i class="{{ $icons[$service->title] ?? 'fa-solid fa-bolt' }}"></i>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="card-body p-1-9 shadow position-relative overflow-hidden">
                                    <h3 class="h5">
                                        <a href="{{ route('services.show', $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </h3>
                                    <p class="mb-0 w-80">
                                        {{ \Illuminate\Support\Str::limit($service->description, 110) }}
                                    </p>
                                    <div class="service-btn mt-3">
                                        <a href="{{ route('services.show', $service->slug) }}">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No services available at the moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- FOOTER
================================================== -->
        @include('partials.footer')

    </div>
    <!-- SCROLL TO TOP
================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- JavaScript Files -->

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

    <!-- All JS include end -->
</body>

</html>
