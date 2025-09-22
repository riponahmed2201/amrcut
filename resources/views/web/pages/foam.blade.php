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
