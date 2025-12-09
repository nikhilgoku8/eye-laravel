@extends('front.layout.master')

@section('content')

<div class="contact_us_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/surgeries.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>your eyes</span>
                <br>
                <span class="bold">we care</span>
            </div>
            <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
            <div class="banner_btns">
                <a href="#" class="purple_hollow_btn">Book An Appoinment</a>
                <a href="#" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

@include('front.includes.features')

<div class="google_map_wrapper">
    <div class="inner_container">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.18272023868!2d72.84018227585439!3d19.14347744984946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b631dbcf42db%3A0x6c05ea1332708931!2sOrbit%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1764343702717!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</div>
<!-- google_map_wrapper -->

<div class="contact_us_wrapper">
    <div class="container">
        <div class="inner_container">

            <div class="title center">Contact Us</div>
            
            <div class="three_boxes">
                <div class="info_box">
                    <div class="icon">
                        <img src="https://placehold.co/100x100/000000/FFF/png">
                    </div>
                    <div class="text_box">
                        <a href="#">+91 00000 00000</a>
                        <br>
                        <a href="#">+91 00000 00000</a>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon">
                        <img src="https://placehold.co/100x100/000000/FFF/png">
                    </div>
                    <div class="text_box">
                        <a href="mailto:contact@orbitshealth.com">contact@orbitshealth.com</a>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon">
                        <img src="https://placehold.co/100x100/000000/FFF/png">
                    </div>
                    <div class="text_box">
                        <p>Mumbai Suburbs, <br>Maharashtra, India</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- contact_us_wrapper -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection