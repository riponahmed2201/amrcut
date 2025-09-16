@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Sewing</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Sewing</li>
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
                        <img src="{{ asset('assets/web/images/sewing/SWP-15-0805_99-186-EDIT-300x200.jpg') }}"
                            alt="image">
                        <h3>Expertly Sewn Cushion Cases</h3>
                        <p>Once your fabric is <b>cut to precise</b> sizes and organized by our CAD department, it moves to
                            our
                            sewing room. Here, each piece is carefully <b>sewn into a perfect cushion case</b>, with the
                            <b>fill
                                opening left ready</b> for adding the chosen cushion filling.</p>

                        <p>Every step is handled with care, ensuring that your cushions are not only <b>beautifully
                                crafted</b> but
                            also <b>ready for comfort</b> the moment they’re filled.</p>

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
