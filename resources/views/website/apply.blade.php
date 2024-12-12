@extends('website.common.main')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="d-inline-block mb-4 mb-lg-5">
                    <img src="{{asset('website/assets/images/aqt_lg.png')}}" alt="Logo" class="img-fluid"><br>
                    <h6 class="mb-0 desc md d-inline-block lh-sm">COMING SOON AT EFM<br>European Film Market 2025</h6>
                </div>
                <div class="sec-title lg fw-bold mb-2">Epic Tales Legendary Creators And A Universe of Cinematic Brilliance</div>
                <span class="desc md2 fw-medium mb-4">be part of the story that shapes the future of entertainment.</span>
            </div>
            <div class="col-lg-6">
                <div class="border primary-border position-relative br20 px-3 px-md-4 py-4 py-lg-5 overflow-hidden">
                    <form class="w-100" id="apply_form">
                        <p class="desc md2 fw-medium mb-4">Complete the form below to unlock exclusive insights and opportunities !</p>
                        <div id="email_wrap">
                            <div class="d-flex">
                                <input type="email" name="email" id="email" class="form-control py-3 px-4 me-2" placeholder="Enter your Email">
                                <button type="button" class="formbtn lg px-3 py-3" onclick="sendOtp()">Get OTP</button>
                            </div>
                            <div id="email_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                        </div>
                        <div id="otp_wrap" style="display: none">
                            <div class="d-flex">
                                <input type="text" id="otp" class="form-control py-3 px-4 me-2" placeholder="Enter OTP">
                                <button type="button" class="formbtn px-3 px-xl-4 py-3" onclick="verifyOtp()">Verify</button>
                            </div>
                            <div id="otp_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                        </div>
                        <div id="main_form" style="display: none">
                            <div class="mb-3">
                                <div class="d-flex">
                                    <select name="country_code" id="country_code" class="form-control me-2" style="max-width: 120px"></select>
                                    <input type="text" name="phone" id="phone" pattern="[0-9]{8,15}" inputmode="numeric" 
                                    class="form-control py-3 px-4" placeholder="Enter your Phone no."
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                                </div>
                                <div id="phone_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" id="name" class="form-control py-3 px-4" placeholder="Enter your Full Name">
                                <div id="name_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="company" id="company" class="form-control py-3 px-4" placeholder="Enter your Company Name">
                                <div id="company_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="designation" id="designation" class="form-control py-3 px-4" placeholder="Enter your Designation">
                                <div id="designation_error" class="alert alert-danger small py-1 px-2 mt-1" style="display: none"></div>
                            </div>
                            <div>
                                <button type="button" class="primary-btn hovered br5 py-3" id="submit_btn">Submit</button>
                                <div id="form_msg" class="alert alert-success small py-2 px-3 mt-2" style="display: none"></div>
                                <div id="formfailed_msg" class="alert alert-danger small py-1 px-2 mt-2" style="display: none"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form_loader d-flex flex-column align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100">
                        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                        Loading
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')
    <script src="{{asset('website/assets/js/form.js')}}"></script>
@endsection