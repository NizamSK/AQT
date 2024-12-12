@extends('website.common.main')
@section('content')

<section class="py-5">
    <div class="container py-lg-5">
        <div class="row mb-lg-5">
            <div class="col-md-4 mb-4 mb-lg-5">
                <div class="h-100 border primary-border px-3 px-lg-4 py-4 d-flex align-items-start" style="background-color: rgba(255,110,0,.1)">
                    <img src="{{asset('website/assets/images/location.svg')}}" alt="Location" class="img-fluid me-2 me-lg-3">
                    <div class="mt-2">
                        <div class="desc md mb-2">Address:</div>
                        <div class="desc text-third">It is a long established fact that a reader will be distracted by the readable .</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-lg-5">
                <div class="h-100 border primary-border px-3 px-lg-4 py-4 d-flex align-items-start" style="background-color: rgba(255,110,0,.1)">
                    <img src="{{asset('website/assets/images/email.svg')}}" alt="email" class="img-fluid me-2 me-lg-3">
                    <div class="mt-2">
                        <div class="desc md mb-2">Email:</div>
                        <div class="desc text-third"><a href="mailto:officialaqt@aqt.in">officialaqt@aqt.in</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-lg-5">
                <div class="h-100 border primary-border px-3 px-lg-4 py-4 d-flex align-items-start" style="background-color: rgba(255,110,0,.1)">
                    <img src="{{asset('website/assets/images/phone.svg')}}" alt="phone" class="img-fluid me-2 me-lg-3">
                    <div class="mt-2">
                        <div class="desc md mb-2">Phone Number:</div>
                        <div class="desc text-third"><a href="tel:+134567890343">+1 34567890343</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{asset('website/assets/images/contact-machine.png')}}" alt="Camera" class="img-fluid mb-4 mb-lg-5">
                <div class="sec-title md2 fw-medium mb-0">Let's create the future of entertainment togather!</div>
            </div>
            <div class="col-lg-6">
                <div class="primary-border50 border px-3 px-lg-4 px-xl-5 py-4 py-lg-5">
                    <form class="w-100" action="javascript:;" id="contact-form">
                        <div class="mb-4">
                            <input class="custom-input" type="text" name="name" id="name" placeholder="Full name..." required>
                        </div>
                        <div class="mb-4">
                            <input class="custom-input" type="email" name="email" id="email" placeholder="E-mail address..." required>
                        </div>
                        <div class="mb-4">
                            <textarea class="custom-input border-0" name="question" id="question" placeholder="Your question goes here..."></textarea>
                        </div>
                        <div>
                            <button type="button" class="custom-submit" id="contact-submit">Let's do it!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')

@endsection