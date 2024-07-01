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

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <div class="">
        <img src="{{ asset('assets/images/Section.png') }}" class="img-fluid z-0 position-relative" />

        <main class="container">
            <div class="back">
                <a href="{{ url()->previous()  }}" class="text-decoration-none">
                    <button class="btn btn-sm"><i class="bi bi-arrow-left"></i> Back</button>
                </a>
            </div>
            <div class="bg-white z-3 position-relative p-5" id="register-section">
                <h1 class="fs-1 fw-bolder">Vendor Application Form</h1>
                <p>You're just a Step away from becoming a vendor</p>
                <form enctype="multipart/form-data" action="{{ route('vendor.registration') }}" method="POST"
                    class="mt-4 register-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputBusinessName" class="form-label">Business Name</label>
                                <input type="text" name="business_name" class="form-control" id="InputBusinessName"
                                    placeholder="Business Name">
                            </div>
                            @if ($errors->has('business_name'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('business_name') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputCACNumber" class="form-label">Business CAC <sup class="fs-6 fw-medium">(If
                                        Available)</sup></label>
                                <input type="text" name="cac_number" class="form-control" id="InputCACNumber"
                                    placeholder="Business CAC">
                            </div>
                            @if ($errors->has('cac_number'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('cac_number') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputCountry" class="form-label">Country Located</label>
                                <input type="text" name="business_country" class="form-control" id="InputCountry"
                                    placeholder="Country Located">
                            </div>
                            @if ($errors->has('business_country'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('business_country') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputState" class="form-label">State Located</label>
                                <input type="text" name="business_state" class="form-control" id="InputState"
                                    placeholder="State Located">
                            </div>
                            @if ($errors->has('business_state'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('business_state') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputCity" class="form-label">City Located</label>
                                <input type="text" name="business_city" class="form-control" id="InputCity"
                                    placeholder="City Located">
                            </div>
                            @if ($errors->has('business_city'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('business_city') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="" class="form-label">Active Time</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" name="opening_time" class="form-control"
                                                id="InputOpenTime" placeholder="Opening Time">
                                            <label for="InputOpenTime">Opening Time</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="number" name="closing_time" class="form-control"
                                                id="InputCloseTime" placeholder="Closing Time">
                                            <label for="InputCloseTime">Closing Time</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('opening_time'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('opening_time') }}</span>
                                </span>
                            @endif
                            @if ($errors->has('closing_time'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('closing_time') }}</span>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-12 col-12 my-auto" id="form-section">
                            <div class="mb-3">
                                <label for="InputAddress" class="form-label">Business Address </label>
                                <textarea type="text" name="business_address" class="form-control" rows="5" id="InputAddress"
                                    placeholder="Enter all your Store's Address"></textarea>
                            </div>
                            @if ($errors->has('business_address'))
                                <span class="error text-danger">
                                    <span class="section-subtitle"
                                        style="margin-inline: 0px">{{ $errors->first('business_address') }}</span>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3" id="login-btn">
                            Submit Details
                        </button>

                    </div>
            </div>
        </main>
    </div>
</body>

<footer class="my-5">
    <p class="text-center text-secondary fw-medium" id="footer-text">
        FastBuka @ 2024 All Right Reserved
    </p>
</footer>


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
