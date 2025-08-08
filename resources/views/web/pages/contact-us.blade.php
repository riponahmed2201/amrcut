@extends('web.layouts.app')

@section('web-content')
    <!-- uni banner area start -->
    <div class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Contact Information</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- uni Banner area end -->

    <!-- contact page area start -->
    <div class="contact-page ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="default-section-title">
                            <h3>Request a CALLBACK</h3>
                        </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" id="name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" placeholder="Phone"
                                            id="phone_number" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="default-button" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-details-area pt-30">
                        <div class="default-section-title">
                            <h6>Contact Us</h6>
                            <h3>Feel Free To Contact With Us</h3>
                        </div>
                        <div class="contact-card-area">
                            <div class="contact-card">
                                <h5>Our Location</h5>
                                <p><a href="javascrip:void(0)"> 54 Middleton Road Oldham OL9 6AD, England</a></p>
                            </div>
                            <div class="contact-card">
                                <h5>Our Email</h5>
                                <p>
                                    <a href="javascript:void(0)">
                                        <span>admin@cutmaketextileltd.co.uk</span>
                                    </a>
                                </p>
                            </div>
                            <div class="contact-card">
                                <h5>Our Phone</h5>
                                <p><a href="tel:562601620">07535 458286</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact page area end -->

    <!-- google map area start -->
    <div class="google-map">
        <iframe class="g-map"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2371.0813443498755!2d-113.4208817841543!3d53.53846178001977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s25%2F50%20Street%20Here%20United%20For%20Australia!5e0!3m2!1sen!2sbd!4v1626086534014!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- google map area end -->
@endsection
