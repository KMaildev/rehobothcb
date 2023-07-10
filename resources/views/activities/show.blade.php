@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <section class="page-banner-area" style="background-image: url({{ asset('data/banner.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h1>
                    Gallery & Activities
                </h1>
                <ul class="list">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>/</li>
                    <li>Checkout our photo gallery</li>
                    <li>/</li>
                    <li>
                        {{ $category->title ?? '' }}
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="gallery-area pb-70" style="background-color: white; padding-top: 60px;">
        <div class="container">
            <div class="row">

                <div class="row">

                    <div class="col-md-4">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/aIQvj-l5W2s"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>


                    <div class="col-md-4">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/lebIk_gYHHc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/EVG-IH8cMYs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>

                @foreach ($activities as $activity)
                    <div class="col-md-12">
                        <p style="font-size: 20px;">
                            {{ $activity->title ?? '' }}
                        </p>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-gallery-item">
                                <a data-fancybox="gallery" href="{{ $image }}">
                                    <img src="{{ $image }}" alt=""
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #8cc540; padding: 10px;">
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                @endforeach
            </div>
        </div>
    </section>
@endsection
