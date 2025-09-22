@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>About Us</h1>
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
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="about-content-area pr-20">
                        <h3>About Us</h3>

                        <!-- Company formation section -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/web/images/SWP-15-0805_40-127-300x200.jpg') }}"
                                    alt="UFL Company Building" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <p>UFL was formed in September 1990 after the merger of two companies, Feathermade Ltd and
                                    Southern Feather Products.</p>

                                <p>The company's core business is the supply of quality cushion interiors to the furniture
                                    upholstery and soft furnishings industry. Products include foam, feather, fibre
                                    including numerous mixes as well as combinations of the three.</p>

                                <p>The company has three separate factories with square footage in excess of 70,000 ft.²</p>
                            </div>
                        </div>

                        <p>There are currently 150 people working within the company across the three sites at the Falcon
                            Mill in Billingborough (Headquarters), Kestrel Mill in Billingborough and Goodwin Mills in Long
                            Eaton.</p>

                        <!-- Our Aim section -->
                        <div class="company-section mt-5">
                            <h3>Our aim</h3>
                            <p>The company's aim is to supply a bespoke cushion service to all its customers with in a five
                                working day turnaround. There is no minimum or maximum order. The vast majority of the
                                cushions are delivered on our own transport and any small quantities are despatched by our
                                overnight carriers.</p>
                        </div>

                        <!-- Products section -->
                        <div class="company-section mt-5">
                            <h3>Products</h3>
                            <p>We offer a vast range of cushion products for seats, backs, arms, scatters as well as foam
                                tacking kits. The feather options range from economical china duck all the way up to the
                                luxurious down fillings. The fibre options include unbranded conjugated fibres and Wellmans
                                & Advansa Fusion branded fibres.</p>
                        </div>

                        <!-- Company structure -->
                        <div class="company-section mt-4">
                            <h4>The company structure</h4>
                            <p>The company is privately run and owned by Nigel Prue and Paul Herszaft. In August 2002 the
                                management completed a buyout from the existing owner Bob Burns. Between them they have over
                                50 years' experience in the cushion industry.</p>
                        </div>

                        <!-- Departments section -->
                        <div class="company-section mt-5">
                            <h3>Departments</h3>

                            <div class="department-item mb-4">
                                <h4>Development</h4>
                                <p>Our prototype manager is available to visit customers anywhere in the UK to help develop
                                    and advise on all the various filling options.</p>
                            </div>

                            <div class="department-item mb-4">
                                <h4>Sales</h4>
                                <p>Our dedicated sales and office staff are contactable daily from 8am till 5pm.</p>
                            </div>

                            <div class="department-item mb-4">
                                <h4>Production</h4>
                                <p>All our three factories are set up to be extremely versatile to react quickly and
                                    efficiently to produce small and large quantities.</p>
                            </div>
                        </div>

                        <!-- Company values -->
                        <div class="company-values mt-5">
                            <h3>Our Values</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="value-card text-center p-3">
                                        <i class="flaticon-consistency fa-3x mb-3"></i>
                                        <h5>Quality</h5>
                                        <p>Premium materials and craftsmanship in every product</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="value-card text-center p-3">
                                        <i class="flaticon-strategy fa-3x mb-3"></i>
                                        <h5>Service</h5>
                                        <p>Dedicated customer support and quick turnaround times</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="value-card text-center p-3">
                                        <i class="flaticon-return-of-investment fa-3x mb-3"></i>
                                        <h5>Innovation</h5>
                                        <p>Continuous improvement and cutting-edge solutions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- about area end -->
@endsection
