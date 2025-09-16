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
