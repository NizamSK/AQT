<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

use App\Mail\OTPMail;

class OTPController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $otp = random_int(100000, 999999); // Generate a 6-digit OTP
        $email = $request->email;
        // Store OTP in the cache with a 10-minute expiration
        Cache::put('otp_' . $email, $otp, now()->addMinutes(10));

        // Send OTP via email
        try {
            // dd($email);
            Mail::to($email)->send(new OTPMail($otp));
        } catch (\Throwable $th) {
            dd($th);
        }

        return response()->json(['otp' => $otp, 'message' => 'OTP sent successfully']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ]);

        $email = $request->email;
        $otp = $request->otp;

        // Retrieve OTP from cache
        $cachedOtp = Cache::get('otp_' . $email);

        if ($cachedOtp && $cachedOtp == $otp) {
            return response()->json(['message' => 'OTP verified successfully']);
        }

        return response()->json(['message' => 'Invalid OTP or OTP expired'], 400);
    }
}
