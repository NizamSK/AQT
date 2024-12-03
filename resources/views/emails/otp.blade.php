<!DOCTYPE html>
<html>
<head>
    <title>Your OTP Code</title>
</head>
<body>
    <p>Your One-Time Password (OTP) is:</p>
    <h2>{{ $otp ?? 'No OTP provided' }}</h2>
    <p>Please use this OTP to verify your action. It will expire in 10 minutes.</p>
</body>
</html>