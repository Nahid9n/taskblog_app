@extends('website.master')
@section('title','Contact Page')
@section('body')
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><span>contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->

    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1">
                    <div class="office-info">
                        <div class="row">
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="{{asset('/')}}website/assets/images/icon/home.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Address</h2>
                                        <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="{{asset('/')}}website/assets/images/icon/mail-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Email Us</h2>
                                        <p>Bloggar@gmail.com</p>
                                        <p>helloyou@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="office-info-item">
                                    <div class="office-info-icon">
                                        <div class="icon">
                                            <img src="{{asset('/')}}website/assets/images/icon/app.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="office-info-text">
                                        <h2>Call Now</h2>
                                        <p>+1 800 123 456 789</p>
                                        <p>+1 800 123 654 987</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-contact-title">
                        <h2>Have Any Question?</h2>
                        <p>It is a long established fact that a reader will be distracted
                            content of a page when looking.</p>
                    </div>
                    <div class="wpo-contact-form-area">
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone*">
                            </div>
                            <div>
                                <select name="subject" class="form-control">
                                    <option disabled="disabled" selected>Subject</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="note"  id="note" placeholder="Message..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Get in Touch</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-contact-pg-section -->

    <!--  start wpo-contact-map -->
    <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="wpo-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
        </div>
    </section>
    <!-- end wpo-contact-map -->

@endsection
