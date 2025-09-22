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
                <!-- Left Content -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="project-details-text-area pr-20">

                        <h2>The Process</h2>

                        <h3>Feather Filling</h3>
                        <img src="{{ asset('assets/web/images/feather/SWP-15-0805_32-119-300x200.jpg') }}"
                            alt="Feather Filling" class="mb-3">
                        <p>
                            All our feather cushions are machine filled. The feathers are poured into a large tank where
                            they are stirred by a paddle.
                            Then the feathers are blown into each individual channel within the cushion case. The cushions
                            have channels sewn within them
                            to help prevent the feathers moving around. Once the cushion has been filled they are weighed to
                            make sure the cushion is
                            the correct weight and density for the individual customer needs.
                        </p>

                        <h3>Feather Conveyor</h3>
                        <img src="{{ asset('assets/web/images/feather/SWP-15-0805_14-54-300x200.jpg') }}"
                            alt="Feather Conveyor" class="mb-3">
                        <p>
                            All our feather cushions are put through a brushing machine to eliminate excess feathers and
                            help plump the cushions.
                            Then they are sent along a conveyor through a metal detector.
                        </p>

                        <h3>Feather Packing</h3>
                        <img src="{{ asset('assets/web/images/feather/SWP-15-0805_15-65-300x200.jpg') }}"
                            alt="Feather Packing" class="mb-3">
                        <p>
                            Once our feather cushions have been brushed and plumped and sent through the metal detector,
                            they are then placed into feather packing area where the cushions are then placed into bags.
                            The bags are then wrote on with the customer name, cushion type and quantity.
                        </p>

                        <h3>Feather Pad Line</h3>
                        <p>
                            We also have a feather pad line where feather scatter cushions are produced.
                            The scatter cases are clipped on to the filling chute where we then program in the scatter
                            cushion’s required weight.
                            Once we have done this the scatter cushion will automatically be filled by the machine to the
                            desired weight.
                            Once the scatters have been filled to the correct weight they are then sewn and packed.
                        </p>

                        <h3>Feather Examples</h3>
                        <img src="{{ asset('assets/web/images/feather/SWP-15-0805_135-49-768x321.jpg') }}"
                            alt="Feather Examples" class="mb-3">
                        <p>We supply a range of feathers from:</p>
                        <ul>
                            <li>China Duck: For the cheaper end market</li>
                            <li>European Duck: For mid to upper market</li>
                            <li>Feather/Down: For high end market</li>
                            <li>Down: For specialised markets</li>
                        </ul>
                        <p>
                            All our fillings comply to fire retardant requirements of 1988 and cleanliness tests.
                            The feathers are <strong>NOT</strong> plucked from live birds, they are a by-product from the
                            food trade.
                        </p>

                        <h3>The Final Product</h3>
                        <h4>Feather Cushion</h4>
                        <img src="{{ asset('assets/web/images/feather/SWP-15-0805_136-50-300x169.jpg') }}"
                            alt="Feather Cushion" class="mb-3">
                        <p>
                            We supply all our feather cushions in a down proof cloth, with channels within the cushion case
                            to maintain the filling in place.
                            Each cushion is filled to the density required for backs or seats.
                            We have a range of feather fillings to meet each customer’s market demand.
                        </p>

                    </div>
                </div>

                <!-- Right Sidebar -->
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
