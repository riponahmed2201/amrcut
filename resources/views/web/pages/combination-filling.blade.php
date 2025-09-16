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
