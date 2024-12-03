@extends('website.common.main')
@section('content')

<section class="py-5 apply-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="d-inline-block mb-4 mb-lg-5">
                    <img src="{{asset('website/assets/images/aqt_lg.png')}}" alt="Logo" class="img-fluid"><br>
                    <h6 class="mb-0 desc md d-inline-block lh-sm">COMING SOON AT EFM<br>European Film Market 2025</h6>
                </div>
                <div class="sec-title lg fw-bold mb-2">Epic Tales Legendary Creators And A Universe of Cinematic Brilliance</div>
                <span class="desc md2 fw-medium mb-4">be part of the story that shapes the future of entertainment.</span>
            </div>
            <div class="col-lg-6">
                <div class="border primary-border br20 px-3 px-md-4 py-4 py-lg-5">
                    <p class="desc md2 fw-medium mb-4">Complete the form below to unlock exclusive insights and opportunities !</p>
                    <div id="email_wrap">
                        <div class="mb-3 d-flex">
                            <input type="email" name="" id="email" class="form-control py-3 px-4 me-2" placeholder="Enter your Email">
                            <button class="formbtn lg px-3 py-3" onclick="sendOtp()">Get OTP</button>
                        </div>
                    </div>
                    <div id="otp_wrap" style="display: none">
                        <div class="mb-3 d-flex">
                            <input type="text" name="" id="otp" class="form-control py-3 px-4 me-2" placeholder="Enter OTP">
                            <button class="formbtn px-3 px-xl-4 py-3" onclick="verifyOtp()">Verify</button>
                        </div>
                    </div>
                    <div id="main_form" style="display: none">
                        <div class="mb-3 d-flex">
                            <select id="country_code" class="form-control me-2" style="max-width: 120px"></select>
                            <input type="text" name="" id="phone" pattern="[0-9]{8,15}" inputmode="numeric" 
                            class="form-control py-3 px-4" placeholder="Enter your Phone no."
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="name" class="form-control py-3 px-4" placeholder="Enter your Full Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="company" class="form-control py-3 px-4" placeholder="Enter your Company Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="" id="designation" class="form-control py-3 px-4" placeholder="Enter your Designation">
                        </div>
                        <div>
                            <button type="button" class="primary-btn hovered br5 py-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')
    <script>
        function setCountryCodes(){
            const jsonFilePath = "{{ asset('website/assets/js/countrycodes.json') }}";
            fetch(jsonFilePath)
            .then(response => {
                if (!response.ok) {throw new Error('Network response was not ok');}
                return response.json(); 
            })
            .then(data => {
                const selectElement = document.getElementById('country_code');
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.dial_code;
                    option.textContent = `${item.code} (${item.dial_code})`;
                    selectElement.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching the JSON file:', error));
        }
        window.sendOtp = function(){
            const emailValue = document.getElementById('email').value;
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (emailRegex.test(emailValue)) {
                $('#email_wrap').hide().siblings('#otp_wrap').slideDown()
            }
            else{
                console.log('Invalid Email')
            }
        }
        window.verifyOtp = function(){
            const otp = document.getElementById('otp')
            
        }
        document.addEventListener('DOMContentLoaded', function () {
            setCountryCodes()
            
        });
    </script>
@endsection