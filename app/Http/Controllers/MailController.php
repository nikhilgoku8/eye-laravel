<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public $email;

    public function __construct(){
        $this->email = 'nikhilgoku8@gmail.com';
      //  $this->email = ['nikhilhemantsonawane@gmail.com', 'nikhilgoku8@gmail.com'];
    }

    public function test_mail()
    {
        $mailData = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 11 with mailtrap.'
        ];

        Mail::to($this->email)->send(new SendEmail($mailData));

        return "Email has been sent.";
    }

    public function send_mail(array $mailData){
        try {
                Mail::to($this->email)->send(new SendEmail($mailData));
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
}
