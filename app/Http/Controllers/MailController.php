<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\TestMail;
use App\Mail\FormMail;
use App\Mail\CareerEnquiryMail;

class MailController extends Controller
{
    public $email;

    public function __construct(){
        $this->email = 'web@waterindia.in';
        $this->career_email = 'careers@mintit.in';
      //  $this->email = ['nikhilhemantsonawane@gmail.com', 'business@elyfdigital.com'];
    }

    public function test_mail()
    {
        $mailData = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 11 with mailtrap.'
        ];

        Mail::to($this->email)->send(new TestMail($mailData));

        return "Email has been sent.";
    }

    public function send_career_mail($mailData, $file){
        try {
                Mail::to($this->career_email)->send(new CareerEnquiryMail($mailData, $file));
                $response = array(
                    'success' => true,
                    'message' => 'Email Sent',
                    'class' => 'alert alert-success'
                );
                // Email sent successfully
            } catch (\Exception $e) {
                // Handle the exception
                $response = array(
                    'error' => true,
                    'message' => 'Mail Error',
                    'error_message' => $e->getMessage(),
                );
                // You can log the exception, display a user-friendly message, or perform other actions
                // For example, logging the exception:
                // \Log::error('Email sending failed: ' . $e->getMessage());
            }
        return response()->json($response);
    }

    public function careers_enquire_form_process(Request $request){

        $rules = array(
            'fname'=>'required|regex:/^[a-zA-Z ]+$/',
            'phone'=>'bail|required|numeric|digits:10',
            'email'=>'required|email',
            'resume'=>'required|mimes:doc,docx,pdf',
            // 'comments_message'=>'required|max:600',
        );

        $messages = [
            'fname.regex' => ':attribute must have letters and spaces only.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, [
            'fname' => 'Full Name',
            'phone' => 'Mobile No',
            'email' => 'Email',
            'resume' => 'Resume',
            // 'comments_message' => 'Message',
        ]);

        if(!$validator->passes()){
            return response()->json([
                'error' => true,
                'error_type' => 'form',
                'message' => 'Invalid request',
                'errors' => $validator->errors()->toArray(),
            ], 422);

        }else{

            $requestData = array(
                'Full Name' => $request->input('fname'),
                'Mobile No' => $request->input('phone'),
                'Email' => $request->input('email')
                // 'Message' => $request->input('comments_message')
            );

            $mailData = array(
                'body' => $requestData,
                'subject' => 'Career Enquiry Form',
            );
            $file = $request->file('resume');

            $response = $this->send_career_mail($mailData, $file);
        }
        return response()->json($response);
    }

    public function send_mail(array $mailData){
        try {
                Mail::to($this->email)->send(new FormMail($mailData));
                $response = array(
                    'success' => true,
                    'message' => 'Email Sent',
                    'class' => 'alert alert-success'
                );
                // Email sent successfully
            } catch (\Exception $e) {
                // Handle the exception
                $response = array(
                    'error' => true,
                    'message' => 'Mail Error',
                    'error_message' => $e->getMessage(),
                );
                // You can log the exception, display a user-friendly message, or perform other actions
                // For example, logging the exception:
                // \Log::error('Email sending failed: ' . $e->getMessage());
            }
        return response()->json($response);
    }

    public function contact_us_form_process(Request $request){

        $rules = array(
            'fname'=>'required|regex:/^[a-zA-Z]+$/',
            'lname'=>'required|regex:/^[a-zA-Z]+$/',
            'email'=>'required|email',
            'phone'=>'bail|required|numeric|min_digits:5|max_digits:15',
            'comment_message'=>'required',
        );

        $messages = [];

        $validator = Validator::make($request->all(), $rules, $messages, [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'comment_message' => 'Message',
        ]);

        if(!$validator->passes()){
            return response()->json([
                'error' => true,
                'error_type' => 'form',
                'message' => 'Invalid request',
                'errors' => $validator->errors()->toArray(),
            ], 422);

        }else{
            // This will send mail and get response
            $response = $this->send_mail([
                'body' => $request->except('_token'),
                'subject' => 'Contact Us Form',
            ]);
        }
        return response()->json($response);
    }

    public function enquire_learning_course_process(Request $request){

        $rules = array(
            'enquire_fname'=>'required|regex:/^[a-zA-Z\s]+$/',
            'enquire_email'=>'required|email',
            'enquire_mobile'=>'bail|required|numeric|min_digits:5|max_digits:15',
            'enquire_emessage'=>'required',
        );

        $messages = [
            'enquire_fname.regex' => ':attribute must have letters and spaces only.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, [
            'enquire_fname' => 'Name',
            'enquire_email' => 'Email',
            'enquire_mobile' => 'Phone',
            'enquire_emessage' => 'Message',
        ]);

        if(!$validator->passes()){
            return response()->json([
                'error' => true,
                'error_type' => 'form',
                'message' => 'Invalid request',
                'errors' => $validator->errors()->toArray(),
            ], 422);

        }else{
            // This will send mail and get response
            $response = $this->send_mail([
                'body' => $request->except('_token'),
                'subject' => 'Learning Course Enquiry',
            ]);
        }
        return response()->json($response);
    }

    public function consultation_process(Request $request){

        $rules = array(
            'consultation_fname'=>'required|regex:/^[a-zA-Z\s]+$/',
            'consultation_age'=>'bail|required|numeric|min_digits:1|max_digits:3',
            'consultation_gender'=>'required',
            'consultation_address'=>'required',
            'consultation_mobile'=>'bail|required|numeric|min_digits:5|max_digits:15',
            'consultation_email'=>'required|email',
            'consultation_client_type'=>'required',
            'consultation_organization'=>'required',
            'consultation_issues'=>'required',
            'consultation_duration'=>'required',
            'consultation_medical_history'=>'required',
            'consultation_objective'=>'required',
            'consultation_resource'=>'required',
            'consultation_additional_info'=>'required',
        );

        $messages = [
            'consultation_fname.regex' => ':attribute must have letters and spaces only.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, [
            'consultation_fname'=>'Name',
            'consultation_age'=>'Age',
            'consultation_gender'=>'Gender',
            'consultation_address'=>'Address',
            'consultation_mobile'=>'Mobile',
            'consultation_email'=>'Email',
            'consultation_client_type'=>'Client Type',
            'consultation_organization'=>'Organization',
            'consultation_issues'=>'Issues',
            'consultation_duration'=>'Condition Duration',
            'consultation_medical_history'=>'Medical History',
            'consultation_objective'=>'Objective',
            'consultation_resource'=>'Resource',
            'consultation_additional_info'=>'Additional Information',
        ]);

        if(!$validator->passes()){
            return response()->json([
                'error' => true,
                'error_type' => 'form',
                'message' => 'Invalid request',
                'errors' => $validator->errors()->toArray(),
            ], 422);

        }else{

            // This will send mail and get response
            $response = $this->send_mail([
                'body' => $request->except('_token'),
                'subject' => 'Consultation Form',
            ]);
        }
        return response()->json($response);
    }

    public function register_event_process(Request $request){

        $rules = array(
            'name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'event_name'=>'required',
            'mobile'=>'bail|required|numeric|min_digits:5|max_digits:15',
            'email'=>'required|email',
            'message'=>'required',
        );

        $messages = [
            'name.regex' => ':attribute must have letters and spaces only.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, [
            'name'=>'Name',
            'event_name'=>'Event Name',
            'mobile'=>'Mobile',
            'email'=>'Email',
            'message'=>'Message',
        ]);

        if(!$validator->passes()){
            return response()->json([
                'error' => true,
                'error_type' => 'form',
                'message' => 'Invalid request',
                'errors' => $validator->errors()->toArray(),
            ], 422);

        }else{

            // This will send mail and get response
            $response = $this->send_mail([
                'body' => $request->except('_token'),
                'subject' => 'Register Event Enquiry',
            ]);
        }
        return response()->json($response);
    }
}
