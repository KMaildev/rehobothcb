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
                            style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
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
                                    info@rehobothcb.com
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
                                    09777702318
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
@endsection
