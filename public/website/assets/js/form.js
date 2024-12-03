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
    .catch(error => console.error('Error:', error));
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
});