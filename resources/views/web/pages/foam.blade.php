@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Foam</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Foam</li>
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
                        <h3>Foam</h3>
                        <p>United Fillings Ltd. purchase their raw materials from the UK's major manufacturers and stock a
                            wide variety of grades, with an emphasis on quality, including the highly regarded Reflex range.
                        </p>

                        <p>The blocks that we use can be sliced into sheets, profile cut to shape, fabricated to form
                            complex shapes and packaged to meet your individual requirements.</p>

                        <p>We have state of the art CNC cutting capabilities, enabling us to cut any two dimensional shapes
                            with great accuracy and consistency.</p>

                        <!-- Foam process images -->
                        <div class="pd-img">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/web/images/foam/band_main-300x229.jpg') }}"
                                        alt="Foam cutting process" class="img-fluid">
                                    <p class="text-center mt-2"><small>Click on any of the thumbnails above to see an
                                            enlarged view of the photograph.</small></p>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/web/images/foam/cnc_main-300x201.jpg') }}"
                                        alt="Foam shaping process" class="img-fluid">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/web/images/foam/auto_main-300x225.jpg') }}"
                                        alt="Foam packaging process" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <h3>Foam Classifications</h3>
                        <p>In the majority of cases, flexible slabstock polyurethane foam is purchased on the basis of
                            density and load bearing properties. The British Standard BS5379 covers specifications for
                            flexible polyurethane foam for load bearing purposes and lays down performance requirements.
                            Typical applications in BS5379:1991 (AMD 7126) are listed below:</p>

                        <!-- Foam classification table -->
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Class</th>
                                        <th>Type of Class</th>
                                        <th>Recommended Applications</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><strong>X</strong></td>
                                        <td>Extremely Severe</td>
                                        <td>
                                            Heavy duty contract seats.<br>
                                            Heavy duty public transport seats.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>V</strong></td>
                                        <td>Very Severe</td>
                                        <td>
                                            Public transport seats.<br>
                                            Cinema & Theatre seats.<br>
                                            Contract furniture seats.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>S</strong></td>
                                        <td>Severe</td>
                                        <td>
                                            Private & commercial vehicle seats.<br>
                                            Domestic furniture seats.<br>
                                            Public transport backs & armrests.<br>
                                            Cinema & theatre backs & armrests.<br>
                                            Contract furniture backs & armrests.<br>
                                            Domestic foam mattress cores.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>A</strong></td>
                                        <td>Average</td>
                                        <td>
                                            Private vehicle backs & armrests.<br>
                                            Domestic furniture backs & armrests.<br>
                                            Component layers for domestic mattresses (excluding cores).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>L</strong></td>
                                        <td>Light</td>
                                        <td>
                                            Padding, scatter cushions & pillows.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>Our Service Coverage</h3>
                        <p>We supply seats, backs and upholstery kit foams to most of the UK's leading manufacturers from
                            our factories in Long Eaton, Derbyshire and Billingborough, Lincolnshire.</p>

                        <p>Along with our feather and fibre facilities, we can in short, provide a complete solution to your
                            requirements.</p>
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
