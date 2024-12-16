@extends('website.common.main')
@section('content')

<section class="py-5">
    <div class="container">
        <a href="{{ url()->previous() ?: route('website.careers') }}" 
            class="d-inline-flex desc md fw-medium align-items-center bg-darkgray text-white px-4 px-lg-5 py-3 mb-4">
            <img src="{{ asset('website/assets/images/back.svg') }}" alt="Back" class="img-fluid me-2 me-lg-3">Back to Job Details
        </a>
        <h1 class="sec-title md mb-5">
            <span class="d-inline-block border-bottom primary-border pb-3">Applying for {{ $position }}</span>
        </h1>
        <div class="bg-darkgray px-3 px-md-4 px-xl-5 py-4 py-lg-5">
            <form class="w-100" action="javascript:;" id="career-form">
                <input type="hidden" name="position" value="{{ $position }}">
                <div class="row gy-3 gy-lg-4">
                    <div class="col-md-6 pe-xl-5">
                        <label class="fw-semibold mb-2">Name*</label>
                        <input type="text" class="job-input" name="name" id="name" required>
                        <div id="name_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-6 ps-xl-5">
                        <label class="fw-semibold mb-2">Email Id*</label>
                        <input type="email" class="job-input" name="email" id="email" required>
                        <div id="email_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-6 pe-xl-5">
                        <label class="fw-semibold mb-2">Mobile Number*</label>
                        <div class="d-flex">
                            <select name="country_code" id="country_code" class="job-input px-2 me-1" style="max-width: 100px"></select>
                            <input type="text" class="job-input" name="mobile" id="mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" required>
                        </div>
                        <div id="mobile_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-6 ps-xl-5">
                        <label class="fw-semibold mb-2">Previous Organization*</label>
                        <input type="text" class="job-input" name="previous_organisation" id="previous_organisation" required>
                        <div id="previous_organisation_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-6 pe-xl-5">
                        <label class="fw-semibold mb-2">Total Experience*</label>
                        <input type="text" class="job-input" name="experience" id="experience" required>
                    </div>
                    <div class="col-md-6 ps-xl-5">
                        <label class="fw-semibold mb-2">Address*</label>
                        <input type="text" class="job-input" name="address" id="address" required>
                        <div id="address_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-12">
                        <label class="fw-semibold mb-2">Upload Resume* <span class="fw-normal small">(file size should not exceed 2 MB Only PDF Are Allowed)</span></label>
                        <div class="position-relative">
                            <input type="file" name="resume" id="resume" accept=".pdf" class="d-none" onchange="document.getElementById('resume_file').innerText = this.files[0]?.name || 'No file choosen';" required>
                            <label class="fw-semibold d-inline-block border primary-border py-2 px-3 me-2 me-md-3" for="resume"><img src="{{asset('website/assets/images/upload.svg')}}" alt="upload" class="me-2">Upload file</label>
                            <span id="resume_file">No file choosen</span>
                        </div>
                        <div id="resume_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-12">
                        <label class="fw-semibold mb-2">Message*</label>
                        <textarea name="message" id="message" class="job-input" required></textarea>
                        <div id="message_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                    <div class="col-md-12">
                        <button class="primary-btn" type="button" id="job_submit">Submit</button>
                        <div id="form_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                        <div id="form_msg" class="alert alert-success small py-1 px-2 mt-1" style="display: none"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@section('customjs')
    <script src="{{asset('website/assets/js/careerform.js')}}"></script>
@endsection