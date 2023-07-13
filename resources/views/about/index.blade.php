@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <section class="page-banner-area" style="background-image: url({{ asset('data/about_banner.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h1>
                    About of Our Company
                </h1>
                <ul class="list">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>/</li>
                    <li>About of Our Company</li>
                    <li>/</li>
                    <li>
                        REBOTH CB CO., LTD
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="it-about-area pt-100" style="background-color: white;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="it-about-image">
                        <img src="{{ asset('data/about.png') }}" alt="image"
                            style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="it-about-content">
                        <h3>
                            REBOTH CB CO., LTD
                        </h3>
                        <span style="font-size: 18px;">
                            Oversea Employment Service Agency
                        </span>

                        <p style="text-align: justify">
                            REBOTH CB CO., LTDသည်၂၀၂၀ခုနှစ်ဇန်နဝါရီလ (၃၁)ရက်တွင် Oversea Employment Service
                            Agencyလိုင်စင်ကို ရရှိခဲ့ကာ ကိုဗစ်-၁၉ ေကာင့် လုပ်ငန်းအေကာင်အထည်မေဖာ်နိုင်ပဲ အခုအချိန်တွင်
                            ဂျပန်ကုမဏီကီး ၂ခုနှင့် စာချပ်ဆိုကာ Tokyo တိုကျိမိနှင့် ဂျပန်အေနာက်ေတာင်ပိုင်းမိြဖစ်ေသာ
                            Hiroshima, Yamaguchu, Fukuoka, Okayamaစသည့် မိများသို စားေသာက်ကုန်ြဖန်ချီေရးစက်ရုံများ၊
                            စားေသာက်ဆိုင်များ၊ Super Marketများတွင် လုပ်ကိုင်နိုင်ေအာင် ြပန်လည်ြပင်ဆင်ေနပါသည်။
                        </p>
                        <ul class="list">
                            <li>
                                <i class='bx bx-check-circle'></i>
                                Expert guidance: Overseas Employment Service Agencies provide expert guidance for finding
                                jobs abroad.
                            </li>
                            <li>
                                <i class='bx bx-check-circle'></i>
                                Job connections: They have extensive networks with employers, enhancing your job prospects.
                            </li>
                            <li>
                                <i class='bx bx-check-circle'></i>
                                Streamlined process: These agencies simplify the application process, making it easier for
                                you to navigate visas, documentation, and interviews.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12">

                <div class="section-title">
                    <span class="sub-title">
                        REHOBOTH CB CO., LTD
                    </span>
                    <h2>
                        Company Profile
                    </h2>
                </div>

                <style>
                    .table {
                        border-collapse: collapse;
                        border: 1px solid black;
                        width: 100%;
                    }

                    th,
                    td {
                        border: 1px solid black;
                    }
                </style>
                <table class="table" style="background-color: white">
                    <tbody>
                        <tr>
                            <td style="color: white; background-color:#0F9347; width: 20%;">
                                Company Name
                            </td>

                            <td style="color:black;">
                                REHOBOTH CB CO., LTD
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Type of Company
                            </td>

                            <td style="color:black;">
                                Private Company Limited by Shares
                            </td>
                        </tr>

                        <tr>
                            <td style="color: white; background-color:#0F9347;">
                                Date of establishment
                            </td>

                            <td style="color:black;">
                                2014/06/17
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Address of Main Office
                            </td>

                            <td style="color:black;">
                                No. 49/A, 3th Floor, Moe Sandar Street, 1-Ward, Kamayut
                                Township, Yangon, Myanmar.
                            </td>
                        </tr>

                        <tr>
                            <td style="color: white; background-color:#0F9347;">
                                Emai
                            </td>

                            <td style="color:black;">
                                <a href="mailto:info@rehobothcb.com">
                                    info@rehobothcb.com,
                                </a>
                                <a href="mailto:rehoboth.cb.2022@gmail.com">
                                    rehoboth.cb.2022@gmail.com
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                TEL
                            </td>

                            <td style="color:black;">
                                <a href="tel:09777702318">
                                    09777702318,
                                </a>
                                <a href="tel:09455559778">
                                    09455559778
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="color: white; background-color:#0F9347;">
                                Capital
                            </td>

                            <td style="color:black;">
                                5,000,000MMK
                            </td>
                        </tr>

                        <tr>
                            <td style="color:black;">
                                Bank
                            </td>

                            <td style="color:black;">
                                CB BANK PLC <br>
                                UNITED AMARA BANK
                            </td>
                        </tr>

                        <tr>
                            <td style="color: white; background-color:#0F9347;">
                                Representative
                            </td>

                            <td style="color:black;">
                                Managing Director U BIAK ER
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span class="sub-title">Featured</span>
                    <h2>
                        Company Certificate
                    </h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                <img src="{{ asset('data/certificate/1.png') }}" alt="" data-enlargeable=""
                    style="object-position: top; width: 100%; height: 360px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                    class="img-enlargeable">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                <img src="{{ asset('data/certificate/2.png') }}" alt="" data-enlargeable=""
                    style="object-position: top; width: 100%; height: 360px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                    class="img-enlargeable">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                <img src="{{ asset('data/certificate/3.png') }}" alt="" data-enlargeable=""
                    style="object-position: top; width: 100%; height: 360px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                    class="img-enlargeable">
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                <img src="{{ asset('data/certificate/4.png') }}" alt="" data-enlargeable=""
                    style="object-position: top; width: 100%; height: 360px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                    class="img-enlargeable">
            </div>
        </div>
    </div>

    <section class="project-start-area ptb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-12">
                    <div class="section-title">
                        <span class="sub-title">
                            Messages
                        </span>
                        <h2>
                            MD'S MESSAGE
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="project-start-image">
                                <img src="{{ asset('data/director.jpg') }}" alt="image"
                                    style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;">
                            </div>
                            <div class="info">
                                <center>
                                    <div class="pt-10 pb-10" style="background-color: #0F9347; padding: 17px;">
                                        <h4 class="mt-0 mb-0 text-white" style="font-size: 17px;">
                                            U Biak Er
                                        </h4>
                                        <h6 class="mt-0 mb-0 text-white" style="font-size: 15px;">
                                            Managing Director
                                        </h6>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>
                                MD'S Message
                            </h6>
                            <p style="text-align: justify">
                                Whether you are a job seeker or a business seeking the right hires, we are here to
                                assist you. Our mission is to provide quality and stable employment for Myanmar citizens
                                overseas, particularly in Japan and other countries.
                                <br>
                                We prioritize trust and a holistic workplace environment, fostering teamwork, respectful
                                interactions, and better decision-making for our clients' long-term interests.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="row">

                        <div class="col-md-6">
                            <h6>
                                Director Message
                            </h6>
                            <p style="text-align: justify">
                                Our mission is to provide quality employment opportunities for Myanmar citizens abroad,
                                fostering trust and a cohesive workplace environment. We are dedicated to assisting both job
                                seekers and businesses in finding the right hires, ensuring long-term success.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="project-start-image">
                                <img src="{{ asset('data/direcotrs.jpg') }}" alt="image"
                                    style="object-position: top; width: 100%; height: 300px; object-fit: cover; background-size: corver; border: 2px solid #555;">
                            </div>
                            <div class="info">
                                <center>
                                    <div class="pt-10 pb-10" style="background-color: #0F9347; padding: 17px;">
                                        <h4 class="mt-0 mb-0 text-white" style="font-size: 17px;">
                                            -
                                        </h4>
                                        <h6 class="mt-0 mb-0 text-white" style="font-size: 15px;">
                                            Director
                                        </h6>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="shape13">
            <img src="{{ asset('assets/img/shape/shape13.png') }}" alt="image">
        </div>
    </section>


    <section class="featured-services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">
                    Our Company Statement
                </span>
                <h2>
                    Our Vision, Mission & Value
                </h2>
                <p style="text-align: justify">
                    Choosing us as your overseas employment company means partnering with a dedicated and reliable team that
                    is committed to your success. We will work tirelessly to ensure your employment needs are met with
                    professionalism, integrity, and efficiency.
                </p>
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
                        <h3><a href="">Our Vision</a></h3>
                        <p style="text-align: justify">
                            Our vision is to be a leading overseas employment company, connecting talented individuals with
                            rewarding job opportunities worldwide. We aim to empower job seekers and contribute to the
                            growth and development of businesses in need of skilled and dedicated professionals.
                        </p>
                        <br><br><br><br>
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
                        <h3><a href="#">Our Mission</a></h3>
                        <p style="text-align: justify">Our mission is to provide exceptional overseas employment services
                            by offering a comprehensive
                            range of solutions to both job seekers and employers. We strive to match the right candidates
                            with the right opportunities, fostering mutual success and long-term partnerships. Through our
                            dedication to ethical practices and personalized support, we aim to make a positive impact on
                            the lives of individuals and the organizations we serve.</p>
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
                        <h3><a href="#">Our Value</a></h3>
                        <p style="text-align: justify">
                            Excellence - We strive for excellence in every aspect of our services, aiming to exceed
                            expectations.
                            <br>
                            Respect - We value and respect the diverse backgrounds and perspectives of all individuals we
                            work with.
                            <br>
                            Collaboration - We foster strong partnerships, working together to achieve mutual success.
                            <br>
                            Responsiveness - We are responsive to the needs of our clients, providing timely solutions and
                            support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area-two">
        <div class="container">

            <div class="section-title" style="margin-bottom: 10px;">
                <span class="sub-title">
                    about the company
                </span>
                <h2>
                    Meet Professional Team
                </h2>
            </div>
            <p style="text-align: justify">
                Our overseas employment agency consists of a skilled team dedicated to connecting talented
                individuals with international job opportunities. We have a deep understanding of global markets,
                immigration laws, and visa processes. Our extensive network of contacts allows us to offer a wide
                range of employment opportunities in various sectors. We prioritize transparency, ethical practices,
                and open communication, providing personalized guidance and support to job seekers. Our commitment
                to excellence ensures successful placements and long-term relationships with clients.
            </p>
            <div class="row align-items-center">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-member">
                            <div class="image">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="border-radius: 30px 0 30px 0; width: 100%; height: 290px; background-size: center; object-fit: cover;">

                                <ul class="social-link">
                                    <li><a href="#" class="d-block" target="_blank"><i
                                                class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="d-block" target="_blank"><i
                                                class='bx bxl-twitter'></i></a>
                                    </li>
                                    <li><a href="#" class="d-block" target="_blank"><i
                                                class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="d-block" target="_blank"><i
                                                class='bx bxl-linkedin'></i></a></li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>{{ $team->name ?? '' }}</h3>
                                <span>{{ $team->position ?? '' }}</span>
                                <i class="flaticon-share-icon"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
