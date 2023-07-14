<section class="subscribe-area bg-f9f9f9 ptb-100" style="background-color: #0F9347;">
    <a href="{{ route('contact.index') }}">
        <div class="container">
            <div class="subscribe-content">
                <span class="sub-title">
                    Contact
                </span>
                <h2 style="color: white;">
                    Keep in Touch
                </h2>
                <p style="color: white;">
                    If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                    response
                    all your queries.
                </p>
            </div>
        </div>

        <div class="shape9">
            <img src="{{ asset('assets/img/shape/shape9.png') }}" alt="image">
        </div>
        <div class="shape10">
            <img src="{{ asset('assets/img/shape/shape10.png') }}" alt="image">
        </div>
        <div class="shape11">
            <img src="{{ asset('assets/img/shape/shape11.png') }}" alt="image">
        </div>
        <div class="shape12">
            <img src="{{ asset('assets/img/shape/shape12.png') }}" alt="image">
        </div>
    </a>
</section>

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>

                    <ul class="footer-links-list">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link">
                                About of Our Company
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('cv.index') }}" class="nav-link">
                                Submit CV
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employer.index') }}" class="nav-link">
                                Employer Form
                            </a>
                        </li>
                    </ul>
                    <ul class="social-link">
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>
            </div>



            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-footer-widget pl-2">
                    <h3>Gallery & Activities</h3>
                    <ul class="footer-links-list">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="{{ route('activities.show', $category->id) }}" class="nav-link">
                                    {{ $category->title ?? '' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Address</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bx-map'></i>
                            No. 49/A, 3Th Floor, Moe Sandar Street, 1-Ward, Kamayut Township, Yangon.
                        </li>

                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:09777702318">
                                09777702318
                            </a>
                        </li>

                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:09455559778">
                                09455559778
                            </a>
                        </li>

                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:info@rehobothcb.com">
                                info@rehobothcb.com
                            </a>
                        </li>

                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:rehoboth.cb.2022@gmail.com">
                                rehoboth.cb.2022@gmail.com
                            </a>
                        </li>

                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>Facebook</h3>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                        nonce="PosYNXjc"></script>

                    <div class="fb-page" data-href="https://www.facebook.com/tjlc.edu.ac.jp"
                        data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/tjlc.edu.ac.jp"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/tjlc.edu.ac.jp">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <center>
                        <p>
                            Copyright © {{ now()->year }} REHOBOTH CB CO., LTD. All Rights Reserved
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="shape16">
        <img src="{{ asset('assets/img/shape/shape16.png') }}" alt="image">
    </div>
</footer>
<!-- End Footer Area -->
