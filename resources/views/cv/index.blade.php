@extends('layouts.main')
@section('content')
    <section class="how-its-work-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="how-its-work-content">
                        <span class="sub-title">How It's Work</span>
                        <h2>
                            Apply for your job!
                        </h2>
                        <p>
                            When it comes to choosing an employment agency, there are several factors to consider.
                            Here are some reasons why you may choose us:
                        </p>

                        <div class="inner-box">
                            <div class="single-item">
                                <div class="count-box">
                                    01
                                </div>
                                <h3>
                                    Expertise and Experience
                                </h3>
                                <p style="text-align: justify">
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </p>
                            </div>

                            <div class="single-item">
                                <div class="count-box">
                                    02
                                </div>
                                <h3>
                                    Time and Cost Savings
                                </h3>
                                <p style="text-align: justify">
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="text-white">Name*</label>
                                    <input type="text" name="name" class="form-control " value=""
                                        style="color: white; background-color: #080E32">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="text-white">Phone</label>
                                    <input type="text" name="phone" class="form-control " value=""
                                        style="color: white; background-color: #080E32">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label class="text-white">Additional Note</label>
                                    <textarea class="form-control" rows="5" name="additional_note" style="color: white; background-color: #080E32"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label for="img" style="color: white">
                                        Select your CV to upload
                                    </label>
                                    <br>
                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control-file" required>
                                </div>
                            </div>

                            <div class="col-md-12 py-3">
                                <button type="submit" class="default-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
