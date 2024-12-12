const setCountryCodes = () => { // Append Country codes
    const jsonFilePath = "/website/assets/js/countrycodes.json";
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
const showLoader = ()=>{
    $('.form_loader').addClass('active')
}
const hideLoader = ()=>{
    $('.form_loader').removeClass('active')
}
const formSuccess = (msg)=>{
    $('#form_msg').html(msg).show()
    setTimeout(()=>{
        $('#form_msg').html('').hide()
        const urlParams = new URLSearchParams(window.location.search)
        const returnUrl = urlParams.get('returnurl')
        window.location.href = '/'+returnUrl
    },3000)
}
const formFailed = (msg)=>{
    $('#formfailed_msg').html(msg).show()
    setTimeout(()=>{
        $('#formfailed_msg').html('').hide()
    },3000)
}
const validationCheck = (ele,msg)=>{ // Show Validation message for an element
    hideLoader()
    $(`#${ele}_error`).html(msg).show()
    setTimeout(()=>{
        $(`#${ele}_error`).html('').hide()
    },2000)
}
const sendOtp = () => { // Logic for sending OTP on user email
    showLoader()
    const email = document.getElementById('email').value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email || email=='') {
        validationCheck('email','Please enter your email.')
        return;
    }
    else if (!emailRegex.test(email)){
        validationCheck('email','Please enter a valid email.')
        return;
    }
    fetch('/send-otp', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ email })
    })
    .then(response => response.json())
    .then(data => {
        hideLoader()
        $('#email_wrap').hide().siblings('#otp_wrap').slideDown()
    })
    .catch(error => {
        hideLoader()
    });
};
const verifyOtp = () => { // Logic for verifying OTP
    showLoader()
    const email = document.getElementById('email').value;
    const otp = document.getElementById('otp').value;
    if (!otp || otp=='') {
        validationCheck('otp','Please enter the OTP.')
        return;
    }
    fetch('/verify-otp', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ email, otp })
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw response.json();
        }
    })
    .then(data => {
        hideLoader()
        $('#otp_wrap').hide().siblings('#main_form').slideDown()
    })
    .catch(async error => {
        hideLoader()
        const err = await error;
        validationCheck('otp',err.message)
    });
};
document.addEventListener('DOMContentLoaded', function () {
    setCountryCodes()

    document.getElementById('submit_btn').addEventListener('click', function () {
        const formData = new FormData(document.getElementById('apply_form'));
        $('#main_form input').each(function(){
            if($(this).val()==''){
                validationCheck($(this).attr('id'), 'This field is required')
                return;
            }
        })
        fetch('/submit-form', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                formSuccess('Form submitted successfully. Now redirecting to detail page')
                // alert(data.message);
            } else if (data.status === 'error') {
                formFailed('An error occured. Please try again')
                // console.error(data.errors || data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // alert('An unexpected error occurred.');
        });
    });
    
});