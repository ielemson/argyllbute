<footer class="pt-6 pt-xxl-10 bg-dark">

    <div class="container">

        <!-- Newsletter -->
        <div class="row align-items-end mt-n1-9 pb-6 pb-xxl-8">
            <div class="col-lg-6 mt-1-9">
                <div class="pe-md-5">
                    <div class="section-title-01">
                        <span class="text-secondary text-uppercase small letter-spacing-4 d-block mb-2">
                            Stay Connected
                        </span>
                        <h2 class="mb-0 h1 mt-2 text-white">
                            Get updates on energy solutions and projects
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <div class="row mt-n1-9 pb-6 pb-xxl-8 align-items-center">

            <!-- Logo -->
            <div class="col-lg-4 mt-1-9">
                <div class="footer-logo">
                    <a href="#">
                        <img src="{{ asset("img/logos/footer-light-logo.png") }}" alt="Argyll and Bute Green Energy Ltd">
                    </a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-8 mt-1-9">
                <div class="row mt-n1-9">

                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-map-marker-alt text-secondary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="mb-0 text-white h6 lh-base">
                                    Elsley Court, Great Titchfield Street, London, UK
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-envelope text-secondary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="text-white h6">info@argyllebuteenergy.co.uk</h4>
                                {{-- <h4 class="mb-0 text-white h6">support@argyllbutegreenenergy.co.uk</h4> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-phone-alt text-secondary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="text-white h6">(+44) 7785 386025</h4>
                                {{-- <h4 class="mb-0 text-white h6">(+44) 987 654 321</h4> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="py-4 border-top border-color-light-white">
        <div class="container">
            <div class="row align-items-center">

                <!-- Links -->
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <div class="text-center text-lg-start">
                        <ul class="footer-link mb-0 list-unstyled">
                            <li class="d-inline-block pe-3"><a href="{{ route("home") }}">Home</a></li>
                            <li class="d-inline-block px-3"><a href="{{ route("about") }}">About</a></li>
                            <li class="d-inline-block px-3"><a href="{{ route("services.index") }}">Services</a></li>
                            {{-- <li class="d-inline-block px-3"><a href="#">Projects</a></li> --}}
                            <li class="d-inline-block ps-3"><a href="{{ route("contact") }}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-lg-6">
                    <div class="text-center text-lg-end">
                        <p class="text-white mb-0">
                            &copy; <span class="current-year"></span>
                            Argyll and Bute Green Energy Ltd. All Rights Reserved.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>