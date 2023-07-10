@extends('layouts.main')
@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="shape2">
            <img src="{{ asset('assets/img/shape/shape2.png') }}" alt="image">
        </div>
        <div class="shape3">
            <img src="{{ asset('assets/img/shape/shape3.png') }}" alt="image">
        </div>
        <div class="shape5">
            <img src="{{ asset('assets/img/shape/shape5.png') }}" alt="image">
        </div>
        <div class="shape6">
            <img src="{{ asset('assets/img/shape/shape6.png') }}" alt="image">
        </div>
        <div class="shape7">
            <img src="{{ asset('assets/img/shape/shape7.png') }}" alt="image">
        </div>
        <div class="shape8">
            <img src="{{ asset('assets/img/shape/shape8.png') }}" alt="image">
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Our Address</h3>
                        <p>
                            No. 49/A, 3Th Floor, Moe Sandar Street, 1-Ward, Kamayut Township, Yangon.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>Contact</h3>
                        <p>
                            <a href="tel:09777702318">09777702318</a>
                            <a href="tel:09455559778">09455559778</a>
                        </p>
                        <p>
                            <a href="mailto:info@rehobothcb.com">
                                info@rehobothcb.com
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <h3>Hours of Operation</h3>
                        <p>Monday - Friday: 09:00 - 5:00</p>
                        <p>Sunday & Saturday: 10:30 - 5:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Get in Touch</span>
                <h2>Ready to Get Started?<span class="overlay"></span></h2>
                <p>
                    Alternatively, you may contact us by filling up the contact form. Our team will response you shortly.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-image" data-tilt>
                        <img src="{{ asset('assets/img/contact.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                            autocomplete="off">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="name" type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="phone" type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="subject" type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
