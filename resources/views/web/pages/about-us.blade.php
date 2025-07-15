@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>About Our Company</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- uni Banner area end -->

    <!-- about area start -->
    <div class="about ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-img">
                        <img src="{{asset('assets/web/images/about/a1.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-text-area">
                        <div class="default-section-title">
                            <h6>About Our Company</h6>
                            <h3>What You Get From Our Dedicated Company With Our Wishy</h3>
                        </div>
                        <div class="about-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt
                                ut labore et dolore magna commodo viverra maecenas accumsan facilisis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt
                                ut labore et dolore magna commodo viverra maecenas accumsan facilisis totam rem aperiam
                                eaque quae abillo inventore veritatis quasi architecto.</p>
                            <div class="about-card-area">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="about-card">
                                            <i class="flaticon-consistency"></i>
                                            <h4><a href="/about-us">Consistency</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="about-card">
                                            <i class="flaticon-strategy"></i>
                                            <h4><a href="/about-us">Strategy</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-6">
                                        <div class="about-card">
                                            <i class="flaticon-return-of-investment"></i>
                                            <h4><a href="/about-us">Investment</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- what we do area start -->
    <div class="we-do bg-f9f9f9 ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h6>What We Do</h6>
                <h3>Our Services Professional Entrepreneurial GUI</h3>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="we-do-card">
                            <i class="flaticon-carpenter"></i>
                            <h4><a href="/about-us">Carpenter Working With Wood</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed commodo maecenas accu
                                facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="we-do-card">
                            <i class="flaticon-drill"></i>
                            <h4><a href="/about-us">Beautiful Driller Press Operator</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed commodo maecenas accu
                                facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="we-do-card">
                            <i class="flaticon-warehouse"></i>
                            <h4><a href="/about-us">The Worker Factory Production</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed commodo maecenas accu
                                facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="we-do-card">
                            <i class="flaticon-carpenter-1"></i>
                            <h4><a href="/about-us">The Worker Twisted His Ankle</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed commodo maecenas accu
                                facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what we do area end -->

    <!-- why choose Us area start -->
    <div class="why-we ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area why-we-text-area-2">
                        <div class="default-section-title">
                            <h6>Some Areas Covered By Us</h6>
                            <h3>Our Company Also Works Outside The Country</h3>
                        </div>
                        <div class="why-we-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt
                                ut labore et dolore magna commodo viverra maecenas accumsan facilisis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incdidunt
                                ut labore et dolore magna commodo viverra maecenas accumsan facilisis totam rem aperiam
                                eaque quae abillo inventore veritatis quasi architecto.</p>
                            <div class="ww-list">
                                <ul>
                                    <li><i class="far fa-check-square"></i> <span>Seek Emergency Services</span></li>
                                    <li><i class="far fa-check-square"></i> <span>AC And Heating Repair</span></li>
                                    <li><i class="far fa-check-square"></i> <span>Commercial Plumbing </span></li>
                                    <li><i class="far fa-check-square"></i> <span>Team Of Trustworthy</span></li>
                                    <li><i class="far fa-check-square"></i> <span>Renovation And Makeover </span></li>
                                    <li><i class="far fa-check-square"></i> <span>Cooling System Repair</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="why-we-img-2">
                        <img class="ww2-main" src="{{asset('assets/web/images/why-we/ww-2s.png')}}" alt="image">
                        <img class="middle-img" src="{{asset('assets/web/images/why-we/ww-m.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->
@endsection
