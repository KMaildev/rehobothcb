@extends('layouts.main')
@section('content')
    <section class="how-its-work-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="how-its-work-content">
                        <span class="sub-title">How It's Work</span>
                        <h2>
                            Employer Form
                        </h2>
                        <p>
                            We help employees transition quickly and uccessfully into new jobs and career opportunities.
                        </p>

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
                            <div class="col-md-4">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/Rry3xF_zc80"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="col-md-4">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/O3PkV_4Rb2g"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="col-md-4">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/f4sLdhS1JAc"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 py-5">
                    <style>
                        .form-label {
                            color: white;
                        }
                    </style>
                    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Name</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        placeholder="Company Name" name="company_name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Type of Company</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('company_type') is-invalid @enderror"
                                        placeholder="Type Of Company" name="company_type" value="{{ old('company_type') }}">
                                    @error('company_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Phone Number</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Website</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('website') is-invalid @enderror"
                                        placeholder="Company Website" name="website" value="{{ old('website') }}">
                                    @error('website')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Location</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('location') is-invalid @enderror"
                                        placeholder="Company Location" name="location" value="{{ old('location') }}">
                                    @error('location')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Job Category</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('job_category') is-invalid @enderror"
                                        placeholder="Job Category" name="job_category"
                                        value="{{ old('job_category') }}">
                                    @error('job_category')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('age_limit') is-invalid @enderror"
                                        placeholder="Age Limit: 20-40" name="age_limit" value="{{ old('age_limit') }}">
                                    @error('age_limit')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Educational
                                        Requirement</label>
                                    <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                        placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                    @error('educational_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">
                                        Working Experience Requirement
                                    </label>
                                    <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                        name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                    @error('working_experience_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Other Additional
                                        Requirement</label>
                                    <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                        name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                    @error('other_additional_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Estimate Salary Offer</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                        placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                        value="{{ old('estimate_salary_offer') }}">
                                    @error('estimate_salary_offer')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Other Allowance</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('other_allowance') is-invalid @enderror"
                                        placeholder="Other Allowance" name="other_allowance"
                                        value="{{ old('other_allowance') }}">
                                    @error('other_allowance')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Gender: Male = 10, Female =
                                        5</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('gender') is-invalid @enderror"
                                        placeholder="Gender: Male = 10, Female = 5" name="gender"
                                        value="{{ old('gender') }}">
                                    @error('gender')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Interview Type</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('interview_type') is-invalid @enderror"
                                        placeholder="Interview Type: Online" name="interview_type"
                                        value="{{ old('interview_type') }}">
                                    @error('interview_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 py-2">
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
