@extends('front.layout.master')

@section('content')

<div class="testimonials_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/surgeries.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Customer's</span>
                <br>
                <span class="bold">Speak</span>
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
            
            <div class="title">Hear From Our Patients</div>
            <div class="text">
                <p class="sub_title">Real stories, real experiences. Our patients share their journeys, highlighting the care, comfort, and confidence they received with us. Honest experiences from patients who found clarity, comfort, and expert care at every step.Your trust inspires us—read what our patients have to say about their treatment and results.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

@include('front.includes.testimonials')

@include('front.includes.get-in-touch')

</div>
<!-- testimonials_page -->

@endsection