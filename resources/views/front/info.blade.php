@extends('front.layout.master')

@section('content')

<div class="info_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/info.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Our</span>
                <br>
                <span class="bold">Process</span>
            </div>
            <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
            <div class="banner_btns">
                <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                <a href="tel:+919820504546" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

<!--@include('front.includes.features')-->

<div class="about_hospital grey_bg">
    <div class="container">
        <div class="inner_container">
            
            <!-- <div class="title">Main Services Overview</div> -->
            <div class="text">
                <p class="sub_title">Everything you need to know—before, during, and after your visit. Easy, accessible details to help you feel informed and confident about your eye care. Your one-stop guide for appointments, procedures, and post-care instructions.Clear, simple, and helpful information to make your treatment journey smooth and stress-free.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

<div class="img_txt_box_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="info_boxes">

                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Preparing for </span>
                            <span class="light_txt">Your Visit</span>
                        </div>
                        <div class="description">
                            <ul>
                                <li>Bring all previous eye reports, medications, and insurance details.</li>
                                <li>Avoid wearing contact lenses for at least 24 hours before certain tests.</li>
                                <li>Follow specific pre-operative instructions shared during consultation.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/info/preparing-for-your-visit.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Insurance and </span>
                            <span class="light_txt">Billing</span>
                        </div>
                        <div class="description">
                            <ul>
                                <li>We accept major insurance providers and will assist with claims.</li>
                                <li>Detailed billing statements provided for transparency.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/info/insurance-and-billing.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Patient Rights and</span>
                            <span class="light_txt">Responsibilities</span>
                        </div>
                        <div class="description">
                            <ul>
                                <li>Your privacy and confidentiality are prioritized.</li>
                                <li>Consent is obtained before any procedure.</li>
                                <li>You are encouraged to ask questions and understand your treatment plan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/info/patient-rights-and-responsibilities.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Post-Operative  </span>
                            <span class="light_txt">Care</span>
                        </div>
                        <div class="description">
                            <ul>
                                <li>We accept major insurance providers and will assist with claims.</li>
                                <li>Detailed billing statements provided for transparency.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/info/post-operative-care.jpg') }}">
                    </div>
                </div>

            </div>
            <!-- surgeries_boxes -->

            <div class="btn_wrapper center">
                <button class="purple_hollow_btn request_callback">Make an appointment</button>
            </div>

        </div>
    </div>
</div>
<!-- img_txt_box_wrapper -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection