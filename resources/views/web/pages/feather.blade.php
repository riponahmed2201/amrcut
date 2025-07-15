@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Feather</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Feather</li>
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
                        <img src="assets/web/images/inner-images/pd1.jpg" alt="image">
                        <h3>Residential Carpenter Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. It is a long established fact that a reader
                            will be distracted by the readable content of a page when.</p>
                        <div class="pd-img">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/web/images/project/p2.jpg" alt="image">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/web/images/project/p3.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                        <h3>Project Summary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. It is a long established fact that a reader
                            will be distracted by the readable content of a page when.</p>
                        <div class="sd-list-area">
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i> <span>Those who do not know how to pursue</span>
                                </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i>
                                    <span>Pleasure rationally encounter</span></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i> <span>Consequences that are extremely painful.</span>
                                </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i> <span>Nor again is there anyone who loves or pursues</span>
                                </li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <h3>Result</h3>
                        <p>That’s just a little bit more than the law will allow. We’re gonna do it. On your mark get
                            set and go now. Got a dream and we just know now we’re gonna make our dream come true. Makin
                            their way the only way they know how. That’s just a little bit more than the law will
                            allow.</p>
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
