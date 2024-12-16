<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Models\Contact;
use App\Models\Career;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class WebHomeController extends Controller
{
    public function home()
    {
        return view('website.index');
    }
    public function apply(Request $request)
    {
        $previousUrl = url()->previous();
        if (str_contains($previousUrl, '/apply')) {
            return redirect('/');
        }
        return view('website.apply', compact('previousUrl'));
    }
    public function movies()
    {
        return view('website.movies');
    }
    public function series()
    {
        return view('website.series');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function careers()
    {
        return view('website.careers');
    }
    public function careerDetail()
    {
        return view('website.career-detail');
    }
    public function applyJob(Request $request)
    {
        if (!$request->has('position')) {
            return redirect()->route('website.home'); // Replace 'homepage' with your homepage route name
        }
        $position = urldecode($request->query('position'));
        return view('website.apply-job', compact('position'));
    }
    public function sevenEncounters()
    {
        return view('website.7-encounters');
    }

    public function submitForm(Request $request)
    {
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'country_code' => 'required|string|max:10',
                'phone' => 'required|string|digits_between:8,25',
                'company' => 'nullable|string|max:255',
                'designation' => 'nullable|string|max:255',
            ]);

            // If validation fails, return errors
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation errors',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Create a new lead record
            $fullPhoneNumber = $request->country_code.''.$request->phone;
            Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                // 'country_code' => $request->country_code,
                'phone' => $fullPhoneNumber,
                'company' => $request->company,
                'designation' => $request->designation,
            ]);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'Lead saved successfully'
            ], 200);
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while saving the lead',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function submitContactForm(Request $request)
    {
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'country_code' => 'required|string|max:10',
                'phone' => 'required|numeric|digits_between:6,15',
                'question' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Save the form data to the database
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'question' => $request->question,
            ]);

            // Send email
            $emailData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->country_code . ' ' . $request->phone,
                'question' => $request->question,
            ];

            Mail::send('emails.contact', $emailData, function ($message) {
                $message->to('mohd.salman@antsdigital.in')
                    ->subject('New Contact Form Submission');
            });

            return response()->json(['message' => 'Form submitted successfully!']);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Contact Form Submission Error: ' . $e->getMessage());

            // Return a generic error response
            return response()->json(['message' => 'An error occurred while submitting the form. Please try again later.'], 500);
        }
    }

    public function submitCareerForm(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country_code' => 'required|string|max:5',
            'mobile' => 'required|numeric|max_digits:15',
            'previous_organisation' => 'required|string|max:255',
            'experience' => 'required|string|max:50',
            'address' => 'required|string',
            'resume' => 'required|mimes:pdf|max:2048', // Restrict file type and size
            'message' => 'required|string|max:2000',
            'position' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Store the file
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Save data in the database
        $career = Career::create([
            'name' => $request->name,
            'email' => $request->email,
            'country_code' => $request->country_code,
            'mobile' => $request->mobile,
            'previous_organisation' => $request->previous_organisation,
            'experience' => $request->experience,
            'address' => $request->address,
            'resume' => $resumePath ?? null,
            'message' => $request->message,
            'position' => $request->position,
        ]);

        // Send email
        try {
            Mail::send('emails.career', ['career' => $career], function ($message) use ($career) {
                $message->to('mohd.salman@antsdigital.in', 'Admin')
                        ->subject('New Job Application for '.$career->position.' from '.$career->name.' <'.$career->email.'>');
        
                if (!empty($career->resume)) {
                    $message->attach(storage_path('app/public/' . $career->resume));
                }
            });
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
        }

        return response()->json(['message' => 'Form submitted successfully.'], 200);
    }
}
