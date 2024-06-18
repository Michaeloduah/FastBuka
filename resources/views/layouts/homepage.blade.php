<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>FastBuka - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon" /> --}}
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto me-md-1"><a href="index.html">FastBuka</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0 mx-md-auto mx-lg-auto">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">Products</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Partner</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    @if (!auth()->user())
                        <div class="d-flex flex-row d-block d-lg-none">
                            <a href="{{ route('login') }}" class="text-decoration-none" style="padding: 5px">
                                <button class="btn nav-btn">Login</button>
                            </a>
                            <a href="{{ route('register') }}" class="text-decoration-none" style="padding: 5px">
                                <button class="btn nav-btn">Register</button>
                            </a>
                        </div>
                    @endif
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            @if (auth()->user())
                <div class="d-flex mx-3">
                    @if (auth()->user()->account_type == 'user')
                        <a class="nav-link mx-3 my-auto fs-4 position-relative" href="">
                            <i class="bi bi-cart3 fs-2"></i>
                            <span
                                class="badge position-absolute top-0 start-100 translate-middle badge-pill">{{ count(auth()->user()->cart->cartitem) }}</span>
                        </a>
                    @endif

                    <img src="{{ asset('storage/' . auth()->user()->image) }}" style="aspect-ratio:1/1;" width="50px"
                        alt="" class="img-fluid rounded-circle" />
                </div>
            @else
                <div class="d-flex mx-3 d-none d-lg-block">
                    <a href="{{ route('login') }}" class="text-decoration-none">
                        <button class="btn nav-btn mx-1">Login</button>
                    </a>
                    <a href="{{ route('register') }}" class="text-decoration-none">
                        <button class="btn nav-btn mx-1">Register</button>
                    </a>
                </div>
            @endif
        </div>
    </header>

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 footer-contact">
                        <h3>FastBuka</h3>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@example.com<br />
                        </p>
                        <div class="social-links text-start mt-3 pt-3 pt-md-0">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        <div class="copyright mt-3">
                            &copy; Copyright <strong><span>FastBuka</span></strong>. All Rights Reserved
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Our Menu</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li>
                                <a href="#">Vendors</a>
                            </li>
                            <li>
                                <a href="#">Riders</a>
                            </li>
                            <li>
                                <a href="#">AfamFest</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful</h4>
                        <ul>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>External</h4>
                        <ul>
                            <li>
                                <a href="#">Become a Vendor</a>
                            </li>
                            <li>
                                <a href="#">Become a Riding</a>
                            </li>
                            <li>
                                <a href="#">Work with Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Privacy Policy</h4>
                        <ul>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Term of use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
