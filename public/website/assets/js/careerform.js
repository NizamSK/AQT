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
    $('#job_submit').click(function () {
        $('.alert').hide().text(''); // Reset error messages

        let formData = new FormData($('#career-form')[0]);

        $.ajax({
            url: "/career-submit",
            type: "POST",
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            processData: false,
            contentType: false,
            beforeSend: () => $('#job_submit').prop('disabled', true),
            success: (response) => {
                $('#form_msg').text(response.message).show();
                $('#career-form')[0].reset();
                $('#resume_file').text('No file choosen');
                $('#job_submit').prop('disabled', false);
                setTimeout(() => {
                    $('#form_msg').text('').hide();
                }, 3000);
            },
            error: (error) => {
                $('#job_submit').prop('disabled', false);
                if (error.status === 422) {
                    $.each(error.responseJSON.errors, function (field, messages) {
                        $(`#${field}_error`).text(messages[0]).show();
                    });
                } else {
                    $('#form_error').text('An error occurred. Please try again.').show();
                }
                setTimeout(() => {
                    $('#form_error').text('').hide();
                }, 3000);
            },
        });
    });
})