@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Combination Filling</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Combination Filling</li>
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
                        <img src="{{ asset('assets/web/images/SWP-15-0805_140-55.jpg') }}" alt="image">
                        <h3>Combination Fillings – The Perfect Balance of Comfort & Support</h3>
                        <p>At <b>Amrcut</b>, we know every seat deserves the perfect feel. That’s why our
                            <b>feather
                                and fibre wrap
                                cushions</b> are designed to offer the best of both worlds.
                        </p>
                        <div class="sd-list-area">
                            <ul>
                                <li>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                    <span>
                                        <b>Softness you’ll love</b> – Enjoy the luxurious comfort of feather or fibre
                                        without the
                                        constant need for plumping.
                                    </span>
                                </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i>
                                    <span><b>Consistent shape</b> – Our unique construction keeps your cushions looking neat
                                        and
                                        inviting day after day.</span>
                                </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i> <span>
                                        <b>Softer than foam</b> – With a feather topper gently softening the foam core, you
                                        get a
                                        supportive seat that feels just right.
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <p>Whether for everyday use or a touch of luxury, our <b>combination fillings</b> deliver comfort
                            that lasts.</p>
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
