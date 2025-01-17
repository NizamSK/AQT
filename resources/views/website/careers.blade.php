@extends('website.common.main')
@section('content')

<section class="py-5">
    <div class="container">
        <h1 class="sec-title mb-5">New Openings</h1>
        <div class="bg-darkgray py-4 mb-4 mb-lg-5">
            <div class="px-3 px-md-4 px-xl-5">
                <div class="text-end job-share">
                    <a href="javascript:;"><img src="{{asset('website/assets/images/share.svg')}}" alt="Share" class="img-fluid"></a>
                </div>
                <div class="desc md fw-medium pe-md-5 mb-3">Business Development: Representative-Executive</div>
                <div class="desc">
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/time.svg')}}" alt="time" class="me-2">0-1.5 year Experience</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/location2.svg')}}" alt="location" class="me-2">Delhi NCR</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/level.svg')}}" alt="level" class="me-2">Mid level</div>
                </div>
            </div>
            <hr class="border-white opacity-50 my-4">
            <div class="px-3 px-md-4 px-xl-5 lh2">
                <div class="desc md fw-medium pe-md-5 mb-3">Responsibilities</div>
                <ul class="ps-4 mb-4">
                    <li>Reach & Connect with International buyers of Series & Movies. Build Excellent Client Relationships for the business</li>
                    <li>Set-Up meetings online & at key International Film/Content markets e.g. Berlinale[EFM 2025], Cannes film Festival etc</li>
                </ul>
                <a href="{{route('website.career.detail')}}" class="primary-btn">Know More</a>
            </div>
        </div>
        <div class="bg-darkgray py-4 mb-4 mb-lg-5">
            <div class="px-3 px-md-4 px-xl-5">
                <div class="text-end job-share">
                    <a href="javascript:;"><img src="{{asset('website/assets/images/share.svg')}}" alt="Share" class="img-fluid"></a>
                </div>
                <div class="desc md2 fw-medium pe-md-5 mb-3">Business Assistant: International Content Markets</div>
                <div class="desc">
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/time.svg')}}" alt="time" class="me-2">0-1.5 year Experience</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/location2.svg')}}" alt="location" class="me-2">Berlin</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/level.svg')}}" alt="level" class="me-2">Mid level (part time)</div>
                </div>
            </div>
            <hr class="border-white opacity-50 my-4">
            <div class="px-3 px-md-4 px-xl-5 lh2">
                <div class="desc md2 fw-medium pe-md-5 mb-3">Responsibilities</div>
                <ul class="ps-4 mb-4">
                    <li>Set up the entire exhibition booth during the Berlin Film Festival at the European Film Market 2025 at Gropius Baus:
                        <ul class="mt-2 ms-3">
                            <li>Set up dates: 2-4 days before the Festival & Market commences on Feb. 13, 2025.</li>
                        </ul>
                    </li>
                </ul>
                <a href="{{route('website.career.detail')}}" class="primary-btn">Know More</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')
@endsection