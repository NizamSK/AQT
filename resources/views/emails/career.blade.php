<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Career Form Submissions</title>
</head>
<body>
    <p>New Career Form Submission:</p>
    <ul>
        <li><strong>Name:</strong> {{ $career->name }}</li>
        <li><strong>Email:</strong> {{ $career->email }}</li>
        <li><strong>Mobile:</strong> {{ $career->country_code }} {{ $career->mobile }}</li>
        <li><strong>Previous Organization:</strong> {{ $career->previous_organisation }}</li>
        <li><strong>Experience:</strong> {{ $career->experience }}</li>
        <li><strong>Address:</strong> {{ $career->address }}</li>
        <li><strong>Message:</strong> {{ $career->message }}</li>
        <li><strong>Position applied for:</strong> {{ $career->position }}</li>
        <li><strong>Resume:</strong> In Attachment</li>
    </ul>

</body>
</html>