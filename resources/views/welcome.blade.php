@extends('layouts.homepage')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="hero-section">
                <img src="./assets/images/Vector3.png" class="img-fluid hero-img" alt="" />
                <div class="row mt-5">
                    <div class="col-md-2 d-none d-md-block">
                        <img src="./assets/images/Vector2.png" alt="" width="50%" class="img-fluid" />
                    </div>
                    <div class="col-md-8">
                        <h1 class="text-center">
                            Craving a <span class="">Meal?</span> Place <br />
                            an order with FastBuka

                        </h1>
                        <p class="text-center">
                            {{-- FastBuka delivers hygienic and nutritious meals from your
                            favourite <br>restaurant to you in three simple steps anytime
                            anywhere. --}}
                            FastBuka delivers hygienic and nutritious meals from your favorite <br> restaurants to you in
                            three simple steps, anytime and anywhere.
                        </p>
                        <div class="hero-button text-center">
                            @if (!auth()->user())
                                <a href="{{ route('login') }}" class="text-decoration-none">
                                    <button class="btn button1">Sign Up</button>
                                </a>
                            @endif
                            <a href="{{ route('user.dashboard.food.index') }}" class="text-decoration-none">
                                <button class="btn button2">Order now</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 d-none d-md-block">
                        <img src="./assets/images/Vector1.png" alt="" width="50%" class="img-fluid mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Hygiene Section ======= -->
        <section class="hygiene">
            <div class="container hygiene-content" data-aos="zoom-in">
                <img src="./assets/images/Food_and_flower.png" alt="" class="img-fluid bounce" />
                <div class="row hygiene-write">
                    <div class="col-md-6 col-sm-12 p-3">
                        <h1 class="text-white my-auto">
                            Hygienic and <br />
                            Nutritious Meal
                        </h1>
                    </div>
                    <div class="col-md-6 col-sm-12 p-3">
                        <p class="text-white">
                            Craving a delicious meal but short on time? We've got you covered with our fast and fresh
                            delivery service. Place your order and enjoy hot, freshly-prepared dishes delivered right to
                            your doorstep. Satisfaction guaranteed!
                        </p>
                        <a href="{{ route('user.dashboard.food.index') }}" class="text-decoration-none"><button
                                class="btn hygiene-btn">See Menu</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hygiene Section -->

        <!-- ======= Product Section ======= -->
        <section id="product" class="product">
            <div class="container" data-aos="fade-up">
                <div class="container">
                    <h1 class="text-center product-text">
                        Nutritious Delights for <br />
                        Every Craving
                    </h1>
                    <p class="text-center">
                        Savor wholesome meals bursting with flavor. Our menu offer
                        nutritious options crafted <br />
                        with fresh, quality ingredients to nourish your body and tantalize
                        your taste buds.
                    </p>
                </div>
                <div class="container" data-aos="fade-up">
                    <div class="products-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_2.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_3.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_2.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                            <div class="swiper-slide">
                                <div class="mt-5 mx-2">
                                    <div class="food-card">
                                        <div style="background-color: #d2e8ff; border-radius: 20px">
                                            <img src="./assets/images/food_3.png" class="img-fluid d-block mx-auto py-3"
                                                alt="" />
                                        </div>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-6 me-auto">Name of Food</h1>
                                            <p><i class="bi bi-clock"></i> 30 mins</p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Explicabo officiis praesentium ad molestias ratione.
                                        </p>
                                        <div class="mt-2 d-flex">
                                            <h1 class="fs-3 me-auto fw-bolder">
                                                N8,500.<sup>00</sup>
                                            </h1>
                                            <a href="#" class="text-decoration-none">
                                                <button class="btn food-button px-5 py-2">
                                                    Order now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End product item -->
                        </div>
                        <!-- <div class="swiper-pagination mt-5"></div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Section -->

        <!-- ======= Restaurant Section ======= -->
        <section id="restaurant" class="restaurant my-5 md-p-5">
            <div class="container p-5" data-aos="fade-up">
                <div class="text-center">
                    <img src="{{ asset('images/handshake.png') }}" alt="" class="img-fluid">
                    <h1 class=" restaurant-text">Work with us</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-4">
                        <div class=" shadow p-3 mb-5 bg-body-tertiary rounded">
                            <h1 class="fs-5 text-center fw-bold">Become a Rider</h1>
                            <p>Experience flexibility, freedom, and competitive earnings by delivering with Fastbuka.</p>
                            <a href="#"><button class="btn partner-btn">Join Now</button></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class=" shadow p-3 mb-5 bg-body-tertiary rounded">

                        <h1 class="fs-5 text-center fw-bold">Become a Vendor</h1>
                            <p>
                                A platform for managing menus and taking orders, along with tools to boost
                                visibility and attract more customers.</p>
                                <a href="{{ route('vendor.register') }}"><button class="btn partner-btn">Join Now</button></a>
                            </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class=" shadow p-3 mb-5 bg-body-tertiary rounded">

                        <h1 class="fs-5 text-center fw-bold">Become a Partner</h1>
                            <p>Grow with Fastbuka! Our technology and user base can help you boost sales and unlock new
                                opportunities!</p>
                            <a href="#"><button class="btn partner-btn">Join Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Restaurant Section -->

        <!-- ======= Partner Product Section ======= -->
        {{-- <section id="available" class="product menu-available my-5">
            <div class="container" data-aos="fade-up">
                <div class="">
                    <h1 class="text-center product-text">Our Menu</h1>
                    <p class="text-center">
                        Our amazing menu spans a wide variety of nutritious meals pasta, rice, <br>
                        grilled chicken, turkey and much more
                    </p>
                </div>

                <div class="filter row">
                    <div class="price-range col-md-4 col-12">
                        <div class="range_container">
                            <span class="fw-bold">Price range:</span>
                            <input class="form-control form_control_container__time__input" type="number" id="fromInput"
                                value="2000" min="1000" max="10000" />
                            <input class="form-control form_control_container__time__input" type="number" id="toInput"
                                value="4000" min="1000" max="10000" />
                            <div class="sliders_control">
                                <input id="fromSlider" type="range" value="2000" min="1000" max="10000"
                                    class="mt-3" />
                                <input id="toSlider" type="range" value="5000" min="1000" max="10000"
                                    class="mt-3" />
                            </div>
                        </div>
                    </div>
                    <div class="search col-md-4 col-12">
                        <form action="">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                <input type="search" class="form-control w-full"
                                    placeholder=" Search meals, restaurants..." aria-describedby="basic-addon1" />
                                <button class="btn btn-sm btn-outline-success mx-1 border b-0">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="d-flex justify-content-between">
                            <label for="" class="form-label fw-bold mt-2">Sort by: </label>
                            <select class="form-select my-auto border border-0" aria-label="Default select example"
                                style="width: 30%">
                                <option selected class="fw-bold">Default</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="" class="form-label fw-bold mt-2">Show: </label>
                            <select class="form-select my-auto border border-0 w-25" aria-label="Default select example">
                                <option selected class="fw-bold">12</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row products">
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mt-5 mx-2">
                            <div class="food-card">
                                <div style="background-color: #d2e8ff; border-radius: 20px">
                                    <div class="rating text-white px-2">
                                        <i class="bi bi-stars"></i>
                                        <span class=""> 4.5</span>
                                    </div>
                                    <img src="./assets/images/food_1.png" class="img-fluid d-block mx-auto py-3"
                                        alt="" />
                                </div>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-6 me-auto">Name of Food</h1>
                                    <p><i class="bi bi-clock"></i> 30 mins</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Explicabo officiis praesentium ad molestias ratione.
                                </p>
                                <div class="mt-2 d-flex">
                                    <h1 class="fs-3 me-auto fw-bolder">N8,500.<sup>00</sup></h1>
                                    <a href="#" class="text-decoration-none">
                                        <button class="btn food-button px-5 py-2">
                                            Order now
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn w-100 my-3">See More <i class="bi bi-arrow-right"></i></button>
            </div>
        </section> --}}
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
                    <div class="col-md-3 col-sm-12">
                        <div class="partner-card m-2">
                            <p class="text-center py-4 my-auto">HostShift</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="partner-card m-2">
                            <p class="text-center py-4 my-auto">AfamFest</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="partner-card m-2">
                            <p class="text-center py-4 my-auto">Block7</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="partner-card m-2">
                            <p class="text-center py-4 my-auto">DCT Studio</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Product Section -->

        <!-- Start Learn More Section -->
        <section id="learn">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-5">
                        <h1 class="learn-text">Want to learn more?</h1>
                        <button class="btn">Learn More</button>
                    </div>
                    <div class="col-12 col-md-7">
                        <p class="fw-normal text-black">To find out more about our products, offers and services or if you
                            have any question, please get in touch.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Learn More Section -->
    </main>
    <!-- End #main -->
@endsection
