<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Enquiry;
use App\Models\Specialization;
use App\Models\Doctor;
use App\Models\TimeSlot;
use App\Models\Appointment;
use Mail;
use Carbon\Carbon;
use App\Mail\OTPMail;

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

    public function about_us()
    {
        $data = [
            'meta_title' => "About Us | Eye Hospital",
            'meta_description' => "About Us | Eye Hospital",
        ];
        
        return view('front.about-us', $data);
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
                'patient_phone' => 'required|numeric|digits:10',
                'specialization_id' => 'required|exists:specializations,id',
                'doctor_id' => 'required|exists:doctors,id',
                'slot_id' => 'required|exists:time_slots,id',
                'appointment_date' => 'required|date',
                'patient_message' => 'nullable|string',
                'otp'=>'required|numeric|digits:6',
                // 'doctor_remarks' => 'required|string',
                // 'status' => 'required|string|max:20',
            ];

            $messages = [];

            $attributes = [];

            $validator = Validator::make($request->all(), $rules , $messages, $attributes);

            // This validates and gives errors which are caught below and also stop further execution
            $validated = $validator->validated();

            if(session('otp') != $request->otp){
                $validator->getMessageBag()->add('otp', 'OTP does not match');
                throw new \Illuminate\Validation\ValidationException($validator);
            }elseif (session('otp_email') !== $request->patient_email) {
                $validator->getMessageBag()->add('patient_email', 'Email must match OTP sent email');
                throw new \Illuminate\Validation\ValidationException($validator);
            }elseif (session('otp_expires_at') < now()) {
                $validator->getMessageBag()->add('otp', 'OTP Expired');
                throw new \Illuminate\Validation\ValidationException($validator);
            }

            $validated['specialization_name'] = Specialization::where('id', $validated['specialization_id'])->value('title');
            $validated['doctor_name'] = Doctor::where('id', $validated['doctor_id'])->value('name');
            $validated['start_time'] = TimeSlot::where('id', $validated['slot_id'])->value('start_time');
            $validated['end_time'] = TimeSlot::where('id', $validated['slot_id'])->value('end_time');

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

    public function getDoctorBySpecialization(Request $request)
    {
        $specialization = Specialization::find($request->input('specialization_id'));
        return $specialization->doctors()->where('is_active', 1)->get();
    }

    // public function getTimeSlots(Request $request)
    // {
    //     $request->validate([
    //         'doctor_id' => 'required|exists:doctors,id',
    //         'appointment_date'      => 'required|date|after_or_equal:today'
    //     ]);

    //     // All global time slots
    //     $timeSlots = TimeSlot::where('is_active', 1)->orderBy('start_time')->get();

    //     // Booked slots for this doctor on that date
    //     $booked = Appointment::where('doctor_id', $request->doctor_id)
    //         ->where('appointment_date', $request->appointment_date)
    //         ->where('status', '!=', 'cancelled')
    //         ->pluck('slot_id')
    //         ->toArray();

    //     // Mark availability inside collection
    //     $slots = $timeSlots->map(function ($slot) use ($booked) {
    //         $slot->is_booked = in_array($slot->id, $booked);
    //         return $slot;
    //     });

    //     return response()->json([
    //         'status' => 'success',
    //         'slots'  => $slots
    //     ]);

    // }

    public function getTimeSlots(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date|after_or_equal:today'
        ]);

        $appointmentDate = $request->appointment_date;
        $today = now()->toDateString();

        // Base query for active slots
        $timeSlotsQuery = TimeSlot::where('is_active', 1);

        // If date is today, filter slots greater than current time
        if ($appointmentDate === $today) {
            $currentTime = now()->format('H:i:s');
            $timeSlotsQuery->where('start_time', '>', $currentTime);
        }

        // Fetch filtered time slots
        $timeSlots = $timeSlotsQuery->orderBy('start_time')->get();

        // Booked slots for this doctor on that date
        $booked = Appointment::where('doctor_id', $request->doctor_id)
            ->where('appointment_date', $appointmentDate)
            ->where('status', '!=', 'cancelled')
            ->pluck('slot_id')
            ->toArray();

        // Add is_booked flag
        $slots = $timeSlots->map(function ($slot) use ($booked) {
            $slot->is_booked = in_array($slot->id, $booked);
            return $slot;
        });

        return response()->json([
            'status' => 'success',
            'slots'  => $slots
        ]);
    }

    public function sendOtpViaEmail(Request $request)
    {
        try {

            $validated = $request->validate([
                'patient_email' => 'required|email'
            ]);

            $email = $validated['patient_email'];

            // Check rate limiting
            if (session()->has('otp_last_sent_at')) {
                $diff = abs(now()->diffInSeconds(session('otp_last_sent_at')));
                    // dd($diff);
                if ($diff < 120) {
                    throw \Illuminate\Validation\ValidationException::withMessages([
                        'request_otp' => 'Please wait before requesting another OTP.',
                    ]);
                }
            }

            // Check if OTP exists and still valid
            if (
                session()->has('otp') &&
                ( session()->has('otp_email') && session('otp_email') == $email ) &&
                session()->has('otp_expires_at') &&
                now()->lessThan(session('otp_expires_at'))
            ) {
                $otp = session('otp');
            } else {
                // Generate new OTP
                $otp = rand(100000, 999999);

                session([
                    'otp' => $otp,
                    'otp_expires_at' => now()->addMinutes(10),
                    'otp_email' => $email,
                ]);
            }

            // Send OTP email
            Mail::to($email)->send(new OTPMail($otp));

            // Update last sent timestamp
            session(['otp_last_sent_at' => now()]);

            return response()->json([
                'success' => true,
                'message' => 'OTP Sent',
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

    public function testOtpMail($otp='')
    {
        $otp = 123465;
        Mail::to('nikhilgoku8@gmail.com')->send(new OTPMail($otp));
    }

}
