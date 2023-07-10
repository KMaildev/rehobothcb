@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="page-banner-area" style="background-image: url({{ asset('data/jobbanner.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h1>
                    Jobs
                </h1>
                <ul class="list">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>/</li>
                    <li>Checkout our photo gallery</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="featured-services-area pt-100 pb-70" style="background-color: white">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">
                    Jobs Available In
                    <span class="color3">
                        {{ $country->country ?? '' }}
                    </span>
                </span>
                <h2>
                    We have international career opportunities all across Asia.
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-research"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>
                            Expertise and Experience
                        </h3>
                        <p style="text-align: justify">
                            If your agency has extensive experience and expertise in the industry, they are more likely to
                            understand your specific needs and provide effective solutions. Look for agencies that have a
                            proven track record and a deep understanding of the job market and industry trends.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-speed"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>
                            Strong Network and Connections
                        </h3>
                        <p style="text-align: justify">
                            A reputable agency often has a wide network of employers, recruiters, and industry
                            professionals. This network can provide access to a broader range of job opportunities and
                            increase your chances of finding suitable employment.
                        </p>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-featured-services-box">
                        <div class="icon">
                            <i class="flaticon-email-marketing"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>
                            Personalized Approach
                        </h3>
                        <p style="text-align: justify">
                            A good agency takes the time to understand your unique skills, qualifications, and career
                            aspirations. They provide personalized guidance and support tailored to your individual needs,
                            ensuring that you are matched with the right job opportunities.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-area " style="background-color: white">
        <div class="container">
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-portfolio-box">
                            <a href="{{ route('cv.index') }}" class="image d-block">
                                <img src="{{ $job->photo }}" alt="" data-enlargeable=""
                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                            </a>

                            <div class="content">
                                <h3>
                                    {{ $job->title ?? '' }}
                                </h3>
                                <span>
                                    Job in {{ $job->country->country ?? '' }}
                                </span>
                                <a href="{{ route('cv.index') }}" class="link-btn">
                                    <i class="flaticon-next-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
