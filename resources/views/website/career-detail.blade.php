@extends('website.common.main')
@section('content')

<section class="py-5">
    <div class="container">
        <a href="{{route('website.careers')}}" class="d-inline-flex desc md fw-medium align-items-center bg-darkgray text-white px-4 px-lg-5 py-3 mb-4">
            <img src="{{asset('website/assets/images/back.svg')}}" alt="Back" class="img-fluid me-2 me-lg-3">back to Open Positions
        </a>
        <div class="job-single bg-darkgray py-4 mb-4 mb-lg-5">
            <div class="px-3 px-md-4 px-xl-5">
                <div class="text-end job-share">
                    <a href="javascript:;"><img src="{{asset('website/assets/images/share.svg')}}" alt="Share" class="img-fluid"></a>
                </div>
                <div class="desc md fw-medium pe-md-5 mb-3">Business Development: Representative-Executive</div>
                <div class="desc mb-4">
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/time.svg')}}" alt="time" class="me-2">0-1.5 year Experience</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/location2.svg')}}" alt="location" class="me-2">Delhi NCR</div>
                    <div class="d-inline-flex align-items-center mb-3 me-4 me-lg-5"><img src="{{asset('website/assets/images/level.svg')}}" alt="level" class="me-2">mid level</div>
                </div>
                <a href="javascript:;" class="primary-btn">Apply</a>
            </div>
            <hr class="border-white opacity-50 my-4">
            <div class="px-3 px-md-4 px-xl-5">
                <div class="desc md fw-medium mb-3">Business Development:</div>
                <ul class="ps-4 mb-4">
                    <li>Reach & Connect with International buyers of Series & Movies. Build Excellent Client Relationships for the business</li>
                    <li>Set-Up meetings online & at key International Film/Content markets e.g. Berlinale[EFM 2025], Cannes film Festival etc</li>
                    <li>Manage Participation, meetings & presentations at key International Film/Content markets</li>
                    <li>Regular Updates and reports</li>
                    <li>Secondary Research wherever possible</li>
                    <li>Convert a client online/at-International markets or persuade them to the next level of purchase</li>
                    <li>Synchronize with various partners across functions as per Business Requirements</li>
                    <li>NB: Since the candidate will be joining at an early stage of the organization, they are required to lend a hand across functions as and when required</li>
                </ul>
                <div class="desc md fw-medium mb-3">Relationship Management & Growth:</div>
                <ul class="ps-4 mb-4">
                    <li>Inorganic Growth: Connect with new clients. Minimize missed clients, convert missed clients.</li>
                    <li>Organic Growth: Consolidate & Nurture regular clients.</li>
                    <li>Follow cutting-edge Sales Processes: Maximize Market Coverage & establish a quality leading Brand Salience for our Business and Key Properties.</li>
                    <li>Ensure regular meetings with key buyers</li>
                </ul>
                <div class="desc md fw-medium mb-3">MIS and Reporting:</div>
                <ul class="ps-4 mb-4">
                    <li class="mb-2">MIS, Market info, Competition info. are tracked and reported in a timely manner.</li>
                    <li>Timely, accurate & disciplined reports</li>
                </ul>
                <div class="desc md fw-medium mb-3">Recruitment Criteria:</div>
                <ul class="ps-4 mb-4">
                    <li>Excellent Interpersonal Effectiveness & Efficiency: verbal, written & presentation</li>
                    <li>Adequate proficiency in MS Office: excel, PowerPoint, word, outlook & OneDrive</li>
                    <li>Curious, inquisitive & Self-motivated</li>
                    <li>Clear, Focused & Articulate</li>
                    <li>Well Organized, Persistent, Team player</li>
                    <li>0-1.5 years of experience of business development in relevant sectors. </li>
                    <li>Graduation, post-graduation or relevant certification is preferred but not necessary</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')
@endsection