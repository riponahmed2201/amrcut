@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Transport</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Transport</li>
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
                        <h3>Transport</h3>

                        <!-- First section with loading process -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-7">
                                <p>Our cushions are all loaded by hand and stacked into the relevant Lorries the cushions
                                    will be loaded in area order for each customer. The cushions are all checked onto to the
                                    lorry to make sure each customer is receiving all of their order correctly. The cushions
                                    are then stacked with last drop off at the front of the lorry and the first drop off at
                                    the back of the lorry.</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/web/images/transport/SWP-15-0805_38-125-edited-300x200.jpg') }}"
                                    alt="Loading truck with cushions" class="img-fluid">
                            </div>
                        </div>

                        <!-- Second section with fleet information -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/web/images/transport/SWP-15-0805_185-104-300x200.jpg') }}"
                                    alt="United Fillings delivery trucks" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <p>We have in total 11 Lorries over the 3 sites travelling Nationwide Daily. All our Lorries
                                    are loaded by hand and are loaded in order to suit the customer's needs. We also so have
                                    two vans at the Billingborough site and one at the Long Eaton site for local and small
                                    deliveries.</p>
                            </div>
                        </div>

                        <!-- Third section with delivery service -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-7">
                                <p>United Fillings delivers all their goods via their own vehicles all over the UK, we pride
                                    ourselves on offering a regular delivery service to all areas of the UK.</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/web/images/transport/SWP-15-0805_169-86-300x200.jpg') }}"
                                    alt="United Fillings delivery van" class="img-fluid">
                            </div>
                        </div>

                        <!-- Fourth section with dispatch process -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/web/images/transport/SWP-15-0805_52-139-300x200.jpg') }}"
                                    alt="Warehouse dispatch area" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <p>Once the cushions have been produced and packed they are then carted into despatch. Where
                                    the cushions are then stacked into customer order into bays which are labelled by area
                                    ready for loading on to the relevant lorry later on that day.</p>
                            </div>
                        </div>

                        <!-- Additional transport details -->
                        <div class="transport-details mt-5">
                            <h3>Our Transport Services</h3>
                            <div class="sd-list-area">
                                <ul>
                                    <li><i class="fas fa-long-arrow-alt-right"></i> <span>Nationwide daily delivery service
                                            across the UK</span></li>
                                    <li><i class="fas fa-long-arrow-alt-right"></i> <span>Hand-loaded vehicles for maximum
                                            care</span></li>
                                    <li><i class="fas fa-long-arrow-alt-right"></i> <span>Strategic loading order for
                                            efficient delivery routes</span></li>
                                    <li><i class="fas fa-long-arrow-alt-right"></i> <span>Local delivery vans for small
                                            orders and urgent deliveries</span></li>
                                    <li><i class="fas fa-long-arrow-alt-right"></i> <span>Quality checking process before
                                            dispatch</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="fleet-info mt-4">
                            <h3>Our Fleet</h3>
                            <p>With 11 lorries operating across our three sites and additional local delivery vans, we
                                ensure comprehensive coverage and reliable service. Our vehicles are strategically
                                positioned at Billingborough and Long Eaton sites to serve both large-scale deliveries and
                                local requirements efficiently.</p>
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
    <!-- service details area end -->
@endsection
