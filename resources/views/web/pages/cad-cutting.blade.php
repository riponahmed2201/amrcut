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
    <!-- service details area end -->
@endsection
