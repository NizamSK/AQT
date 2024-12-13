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

document.addEventListener('DOMContentLoaded', function () {
    setCountryCodes()
    $('#contact-submit').on('click', function () {
        let formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            country_code: $('#country_code').val(),
            phone: $('#phone').val(),
            question: $('#question').val(),
        };

        $.ajax({
            url: '/submit-contact-form', // Ensure this route is defined
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function (response) {
                $('#form_msg').text(response.message).show();
                $('#form_error').hide();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $('#name_error').text(errors.name || '').toggle(!!errors.name);
                    $('#email_error').text(errors.email || '').toggle(!!errors.email);
                    $('#phone_error').text(errors.phone || '').toggle(!!errors.phone);
                    $('#question_error').text(errors.question || '').toggle(!!errors.question);
                }
                $('#form_msg').hide();
                $('#form_error').text('There was an error submitting the form.').show();
            },
        });
    });
})