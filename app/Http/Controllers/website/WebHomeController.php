<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;

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
}
