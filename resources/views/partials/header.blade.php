<header class="header-style2">
    <!-- Top Bar -->
    <div class="top-bar bg-primary">
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="top-bar-info">
                        <ul class="ps-0 mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt me-2"></i>
                              Elsley Court, 20-22 Great Titchfield Street...
                            </li>
                            <li class="d-none d-sm-inline-block">
                                <i class="fas fa-envelope me-2"></i>
                                info@argyllebuteenergy.co.uk
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <div class="navbar-default border-bottom">
        <!-- Search -->
        <div class="top-search bg-secondary">
            <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                <form class="search-form" action="#" method="GET">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control"
                            placeholder="Search Argyll and Bute Green Energy...">
                        <span class="input-group-addon close-search mt-1">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <!-- Logo -->
                            <div class="navbar-header navbar-header-custom">
                                <a href="#" class="navbar-brand logodefault">
                                    <img id="logo" src="{{ asset("img/logos/logo.png") }}"
                                        alt="Argyll and Bute Green Energy Ltd">
                                </a>
                            </div>
                            <div class="navbar-toggler bg-primary"></div>
                            <!-- Menu -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li class="active"><a href="{{ route("home") }}">Home</a></li>
                                <li>
                                    <a href="#">Company</a>
                                    <ul>
                                        <li><a href="{{ route("about") }}">About Us</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Energy Solutions</a>
                                    <ul>
                                        @forelse($navServices as $service)
                                            <li>
                                                <a href="{{ route('services.show', $service->slug) }}">
                                                    {{ $service->title }}
                                                </a>
                                            </li>
                                        @empty
                                            <li>
                                                <a href="#">No Services Available</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </li>
                                <li><a href="{{ route("contact") }}">Contact</a></li>
                            </ul>
                            <!-- Right Nav -->
                            <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                <ul>
                                    <li class="d-none d-xl-inline-block">
                                        <a href="{{ route("contact") }}" class="btn-style1 medium text-white">
                                            Partner With Us
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
