@extends('web.layouts.app')

@section('web-content')
    <!-- Main Banner area start -->
    <div class="main-banner owl-carousel">
        <!-- Slide 1 -->
        <div class="main-banner-single-slide"
            style="background: url('{{ asset('assets/web/images/slider/03.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="banner-text-area text-white">
                            <h1 class="fw-bold display-4">The Feather, Fibre & Foam Experts</h1>
                            <p class="lead">Trusted partner in delivering quality textile and upholstery solutions with
                                precision and care.</p>
                            <div class="banner-button-area mt-4">
                                <a class="default-button active" href="/services">Our Services</a>
                                <a class="default-button" href="/contact-us">Request Callback</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="main-banner-single-slide"
            style="background: url('{{ asset('assets/web/images/slider/06.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="banner-text-area text-white">
                            <h1 class="fw-bold display-4">Precision in Every Cut & Stitch</h1>
                            <p class="lead">Using advanced CAD cutting and expert craftsmanship to deliver unmatched
                                consistency.</p>
                            <div class="banner-button-area mt-4">
                                <a class="default-button active" href="/about-us">Learn More</a>
                                <a class="default-button" href="/contact-us">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Banner area end -->

    <!-- about area start -->
    <div class="about bg-f9f9f9 ptb-100">
        <div class="container">
            <div class="row align-items-start">

                <!-- Left Side About Text -->
                <div class="col-lg-8">
                    <div class="default-section-title mb-3">
                        <h2 style="color: #f87a01">The Cushion & Filling Experts</h2>
                    </div>
                    <div class="about-text pe-lg-4">
                        <p>
                            Welcome to <b>Amrcut</b>, your trusted partner in delivering high-quality cushion products
                            and filling solutions for the furniture industry.
                        </p>
                        <p>
                            We specialize in <b>feather, fibre, foam</b> and innovative combination fillings, designed
                            to bring long-lasting comfort and durability to every piece we create.
                        </p>
                        <p>
                            Using our advanced <b>Lectra CAD cutting system</b>, we ensure precision, consistency, and
                            repeatable
                            designs for every order. From fabric cutting to sewing and finishing, each stage is handled with
                            care.
                        </p>
                        <p>
                            At Amrcut, our focus is on building strong relationships with clients by providing reliable
                            manufacturing, innovative techniques, and professional advisory support.
                        </p>
                        <p>
                            Please note, we supply primarily to the trade, but distributor details can be provided upon
                            request.
                        </p>
                        <p>
                            The information on this website is provided with the best of our knowledge and may be updated
                            without prior notice. Linked external websites remain outside of Amrcut’s control, therefore we
                            cannot accept responsibility for their content.
                        </p>
                    </div>
                </div>

                <!-- Right Side Callback Form -->
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="callback-form bg-white shadow rounded p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt fs-3 me-2" style="color: #f87a01"></i>
                            <h5 class="mb-0 fw-bold" style="color: #f87a01">Request a CALLBACK</h5>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Your name: <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address: <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone number: <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your phone"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">SUBMIT</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about area end -->


    <!-- Services Section -->
    <section class="services ptb-100">
        <div class="container text-center">
            <div class="default-section-title">
                <h6>Our Expertise</h6>
                <h3>What We Offer</h3>
            </div>

            <div class="row g-4">

                @php
                    $services = [
                        ['name' => 'Feather', 'icon' => 'fa-feather', 'url' => '/feather'],
                        ['name' => 'Fibre', 'icon' => 'fa-cubes', 'url' => '/fibre'],
                        ['name' => 'Foam', 'icon' => 'fa-layer-group', 'url' => '/foam'],
                        [
                            'name' => 'Combination Fillings',
                            'icon' => 'fa-object-group',
                            'url' => '/combination-filling',
                        ],
                        ['name' => 'CAD / Cutting', 'icon' => 'fa-drafting-compass', 'url' => '/cad-cutting'],
                        ['name' => 'Sewing', 'icon' => 'fa-cut', 'url' => '/sewing'],
                        ['name' => 'Transport', 'icon' => 'fa-truck', 'url' => '/transport'],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="col-md-4">
                        <a href="{{ $service['url'] }}" class="text-decoration-none text-dark">
                            <div class="service-card p-4 shadow-sm rounded bg-light h-100 hover-shadow transition">
                                <i class="fas {{ $service['icon'] }} fs-1" style="color: #f87a01"></i>
                                <h5 class="mt-3">{{ $service['name'] }}</h5>
                                <p class="text-muted">
                                    High-quality {{ strtolower($service['name']) }} solutions tailored to your needs.
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
