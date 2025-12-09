<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Enquiry;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'meta_title' => "Eye Hospital",
            'meta_description' => "Eye Hospital",
        ];
        
        return view('front.home', $data);
    }

    public function blog_and_resources()
    {
        $data = [
            'meta_title' => "Blog and Resources | Eye Hospital",
            'meta_description' => "Blog and Resources | Eye Hospital",
        ];
        
        return view('front.blog-and-resources', $data);
    }

    public function blogs()
    {
        $data = [
            'meta_title' => "Blogs | Eye Hospital",
            'meta_description' => "Blogs | Eye Hospital",
        ];
        
        return view('front.blogs', $data);
    }

    public function contact_us()
    {
        $data = [
            'meta_title' => "Contact Us | Eye Hospital",
            'meta_description' => "Contact Us | Eye Hospital",
        ];
        
        return view('front.contact-us', $data);
    }

    public function eye_diseases()
    {
        $data = [
            'meta_title' => "Eye Diseases | Eye Hospital",
            'meta_description' => "Eye Diseases | Eye Hospital",
        ];
        
        return view('front.eye-diseases', $data);
    }

    public function faqs()
    {
        $data = [
            'meta_title' => "Faqs | Eye Hospital",
            'meta_description' => "Faqs | Eye Hospital",
        ];
        
        return view('front.faqs', $data);
    }

    public function info()
    {
        $data = [
            'meta_title' => "Info | Eye Hospital",
            'meta_description' => "Info | Eye Hospital",
        ];
        
        return view('front.info', $data);
    }

    public function services()
    {
        $data = [
            'meta_title' => "Services | Eye Hospital",
            'meta_description' => "Services | Eye Hospital",
        ];
        
        return view('front.services', $data);
    }

    public function surgeries()
    {
        $data = [
            'meta_title' => "Surgeries | Eye Hospital",
            'meta_description' => "Surgeries | Eye Hospital",
        ];
        
        return view('front.surgeries', $data);
    }

    public function team()
    {
        $data = [
            'meta_title' => "Team | Eye Hospital",
            'meta_description' => "Team | Eye Hospital",
        ];
        
        return view('front.team', $data);
    }

    public function testimonials()
    {
        $data = [
            'meta_title' => "Testimonials | Eye Hospital",
            'meta_description' => "Testimonials | Eye Hospital",
        ];
        
        return view('front.testimonials', $data);
    }

    public function enquiry_thank_you()
    {
        $data = [
            'meta_title' => "Thank You | Eye Hospital",
            'meta_description' => "Thank You | Eye Hospital",
        ];
        
        return view('front.enquiry-thank-you', $data);
    }

    public function appointment_thank_you()
    {
        $data = [
            'meta_title' => "Thank You | Eye Hospital",
            'meta_description' => "Thank You | Eye Hospital",
        ];
        
        return view('front.appointment-thank-you', $data);
    }

    public function enquiry_store(Request $request)
    {
        $dataID = $request->input('dataID');
        try {

            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ];

            $messages = [];

            $attributes = [];

            $validator = Validator::make($request->all(), $rules , $messages, $attributes);

            // This validates and gives errors which are caught below and also stop further execution
            $validated = $validator->validated();

            Enquiry::create($validated);

            return response()->json([
                'status' => 'success',
                'message' => 'Enquiry Stored successfully!',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'error_type' => 'form',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'error_type' => 'server',
                'message' => 'Something went wrong. Please try again later.',
                'console_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function appointment_store(Request $request)
    {
        $dataID = $request->input('dataID');
        try {

            $rules = [
                'patient_name' => 'required|string|max:150',
                'patient_email' => 'required|email|max:150',
                'patient_phone' => 'required|numeric|max:10',
                'specialization_id' => 'required|exists:specializations,id',
                'doctor_id' => 'required|exists:doctors,id',
                'slot_id' => 'required|exists:time_slots,id',
                'appointment_date' => 'required|date',
                'message' => 'required|string',
            ];

            $messages = [];

            $attributes = [];

            $validator = Validator::make($request->all(), $rules , $messages, $attributes);

            // This validates and gives errors which are caught below and also stop further execution
            $validated = $validator->validated();

            Appointment::create($validated);

            return response()->json([
                'status' => 'success',
                'message' => 'Appointment created successfully!',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'error_type' => 'form',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json([
                'status' => 'error',
                'error_type' => 'server',
                'message' => 'Something went wrong. Please try again later.',
                'console_message' => $e->getMessage(),
            ], 500);
        }
    }
}
