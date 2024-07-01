@extends('layouts.homepage')

@section('content')
    <section id="hero" class="d-flex align-items-center menu-hero-section">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="menu-content">
                <div class="row my-auto p-5">
                    <div class="col-md-2 d-none d-md-block"></div>
                    <div class="col-md-8">
                        <p class="text-center">Home / Partners</p>
                        <h1 class="text-center">Our Partners</h1>
                    </div>
                    <div class="col-md-2 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner" class="partner my-5 md-p-5 ">
        <div class="container p-5" data-aos="fade-up">
            <div class="">
                <h1 class="text-center partner-text">Offical Partners</h1>
                <p class="text-center">
                    Our diversed selection of partners, ranging from local favourites to renowned hotspots, <br>
                    guarantees a delicious variety to satisfy every taste and preference.
                </p>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">HostShift</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">AfamFest</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">Block7</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">DCT Studio</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">Minister of Food</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="partner-card m-2">
                        <p class="text-center py-4 my-auto">Zoho Mail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
