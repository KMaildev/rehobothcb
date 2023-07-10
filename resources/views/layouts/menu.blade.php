<!-- Start Top Header Area -->
<header class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <ul class="top-header-contact-info">
                    <li><i class='bx bx-phone-call'></i> <a href="tel:+14854560102">+1-485-456-0102</a></li>
                    <li><i class='bx bx-envelope'></i> <a
                            href="https://templates.envytheme.com/cdn-cgi/l/email-protection#1179747d7d7e51757873786b3f727e7c"><span
                                class="__cf_email__"
                                data-cfemail="6d05080101022d09040f0417430e0200">[email&#160;protected]</span></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="top-header-btn">
                    <a href="contact.html" class="default-btn">Free Site Analysis</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="dibiz-responsive-nav">
        <div class="container-fluid">
            <div class="dibiz-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('data/logo.jpg') }}" class="main-logo" alt="logo">
                        <img src="{{ asset('data/logo.jpg') }}" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="dibiz-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('data/logo.jpg') }}" class="main-logo" alt="logo" style="width: 100px;">
                    <img src="{{ asset('data/logo.jpg') }}" class="white-logo" alt="logo" style="width: 100px;">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">About
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="{{ route('about.index') }}" class="nav-link">
                                        About of Company
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('ceo_message') }}" class="nav-link">
                                        President's Message
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('team') }}" class="nav-link">
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Manpower Services
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($countries as $country)
                                    <li class="nav-item">
                                        <a href="{{ route('job.show', $country->id) }}" class="nav-link">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Gallery & Activities
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('activities.show', $category->id) }}" class="nav-link">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Application
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
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
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>1</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="search-box">
                                <i class="flaticon-search"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="flaticon-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option justify-content-center d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>1</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="search-box">
                                <i class="flaticon-search"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="flaticon-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class='bx bx-x'></i></button>

            <div class="modal-body">
                <div class="logo">
                    <a href="index.html" class="d-inline-block"><img src="{{ asset('assets/img/logo.png') }}"
                            alt="image"></a>
                </div>

                <div class="instagram-list">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img1.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img2.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img3.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img4.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img5.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="box">
                                <img src="{{ asset('assets/img/team/team-img6.jpg') }}" alt="image">
                                <i class='bx bxl-instagram'></i>
                                <a href="#" target="_blank" class="link-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-contact-info">
                    <h2>
                        <a href="tel:+11234567890">+1 (123) 456 7890</a>
                        <span>OR</span>
                        <a
                            href="https://templates.envytheme.com/cdn-cgi/l/email-protection#85ede0e9e9eac5e1ece7ecffabe6eae8"><span
                                class="__cf_email__"
                                data-cfemail="93fbf6fffffcd3f7faf1fae9bdf0fcfe">[email&#160;protected]</span></a>
                    </h2>
                </div>

                <ul class="social-list">
                    <li><span>Follow Us On:</span></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->
