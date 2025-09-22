@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Fibre</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Fibre</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- uni Banner area end -->

    <!-- service details area start -->
    <div class="project-details pt-100 pb-70 details-page">
        <div class="container">
            <div class="row">
                <!-- Left Content -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="project-details-text-area pr-20">

                        <h2>The Process</h2>

                        <h3>Fibre Seat Filling</h3>
                        <img src="{{ asset('assets/web/images/SWP-15-0805_67-154-300x200.jpg') }}" alt="Fibre Seat Filling"
                            class="mb-3">
                        <p>
                            All our fibre seat cushions cases have channels sewn inside to help prevent the fibre
                            moving around the case. Each roll of fibre is weighed before it is hand filled inside the
                            channel to make sure the cushion is the correct weight and density for the customer.
                        </p>

                        <h3>Blow Line Back Filling</h3>
                        <img src="{{ asset('assets/web/images/SWP-15-0805_82-169-300x200.jpg') }}"
                            alt="Blow Line Back Filling" class="mb-3">
                        <p>
                            All our fibre backs are filled with conjugated fibre. The fibre is blown into channels inside
                            the back covers to stop the fibre moving around. Once the backs are filled they are then
                            weighed to make sure they are the correct weight and density for the customer’s needs.
                            Once they have been weighed they are then sent down the conveyor belt for the filling
                            hole to be sewn up. Once sewn they’re then packed and taken to despatch.
                        </p>

                        <h3>Fibre Examples</h3>
                        <img src="{{ asset('assets/web/images/SWP-15-0805_161-78-768x313.jpg') }}" alt="Fibre Examples"
                            class="mb-3">
                        <p>
                            We supply a range of fibre fillings to meet all customers style of cushions needs.
                        </p>
                        <p><strong>Back Fibre:</strong> Conjugate of various denier strengths, branded and unbranded
                            available.</p>
                        <p><strong>Seat Fibres:</strong> Advansa Fusion Quallofil, a blend of spiral and hollowfibres,
                            Wellmans Eco-core conjugate fibre & Wellmans Hollowfibre.</p>

                        <h3>The Final Product</h3>
                        <h4>Fibre Cushions</h4>
                        <img src="{{ asset('assets/web/images/SWP-15-0805_148-63-768x361.jpg') }}" alt="Fibre Cushions"
                            class="mb-3">
                        <p>
                            We supply fibre cushion seats and backs in various cloth, CORDURIN, BARRIER, CALICO, COTTON.
                            <br>
                            The fillings we can offer are Wellman branded fibres, Advansa Quallofil and different denier
                            conjugates fibres for mostly back cushions.
                        </p>

                    </div>
                </div>

                <!-- Right Sidebar (Callback Form only) -->
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
