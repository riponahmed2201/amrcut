@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>CAD/Cutting</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>CAD/Cutting</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- uni Banner area end -->

    <!-- service details area start -->
    <div class="project-details pt-100 pb-70 details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="project-details-text-area pr-20">
                        <div class="pd-img">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/web/images/project/p2.jpg') }}" alt="image">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/web/images/project/p3.jpg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                        <h3>Precision Cushions, Every Time – With Amrcut</h3>
                        <p>At <strong>Amrcut</strong>, we don’t just cut cushions — we craft precision. Using our
                            state-of-the-art
                            <strong>Lectra cutting machine</strong>, every cushion is shaped to the exact sizes specified in
                            your
                            personal
                            CAD file,
                            digitized with care.
                        </p>

                        <p>The result? <strong>Perfect consistency, flawless accuracy, and repeatable quality</strong>—every
                            single time you
                            order.</p>

                        <p>Once your design is on our <strong>Lectra CAD system</strong>, it stays there securely, ensuring
                            your cushions are
                            always cut to the same original specifications. No guesswork. No variation. Just the precision
                            you can trust.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-area pt-30">
                        <div>
                            <h3>Request a CALLBACK</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="appointment-form-area">
                                        <form action="#" method="POST">
                                            <input type="text" class="form-control" placeholder="Name" required>
                                            <input type="email" class="form-control" placeholder="Email" required>
                                            <input type="text" class="form-control" placeholder="Phone" required>
                                            <button class="default-button" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="side-bar-contact">
                            <div class="sd-content">
                                <h3>Need Any Help</h3>
                                <p>Carpenter services however, to explain to you how all this mistaken pleasure</p>
                                <h4><a href="tel:562604620">Call Us: 562-60-1620</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->
@endsection
