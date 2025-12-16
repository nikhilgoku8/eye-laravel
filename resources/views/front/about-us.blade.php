@extends('front.layout.master')

@section('content')

<div class="blogs_resources_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/about-us.png') }}">
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

<div class="our_story">
    <!-- <div class="container"> -->
        <div class="inner_container">
            
            <div class="img_box">
                <img src="{{ asset('front/images/our-story.png') }}">
            </div>
            <div class="text_box">
                <div class="title">Our Story</div>
                <p class="sub_title">Founded in 2006, Orbit Eye Hospital started with a vision to provide world-class eye care services to Mumbai and surrounding areas. Over the years, it has evolved from a small clinic to a leading comprehensive eye care center equipped with the latest technology and highly skilled ophthalmologists.</p>
            </div>

        </div>
    <!-- </div> -->
</div>
<!-- our_story -->

<div class="mission_vision_values">
    <div class="container">
        <div class="inner_container">
            
            <div class="upper_sec">
                <div class="pane left_pane">
                    <div class="title">Our Mission</div>
                    <div class="text">To deliver exceptional eye care services through clinical excellence, advanced technology, and compassionate patient care. We strive to preserve and restore vision while upholding the highest standards of ethics and affordability.</div>
                </div>
                <div class="pane right_pane">
                    <div class="title">Our Vision</div>
                    <div class="text">To be recognized as Mumbai’s top eye care institution, setting benchmarks in patient satisfaction, clinical outcomes, and innovation.</div>
                </div>
            </div>
            <div class="lower_sec">
                <div class="left_pane">
                    <div class="title">Our Values</div>
                </div>
                <div class="right_pane">
                    <div class="info_boxes">
                        <div class="info_box">
                            <div class="sub_title">Excellence:</div>
                            <div class="text">Commitment to superior medical care standards</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Innovation:</div>
                            <div class="text">Embracing cutting-edge technologies & techniques</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Accessibility:</div>
                            <div class="text">Making quality eye care affordable and available</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Compassion:</div>
                            <div class="text">Treating every patient with empathy and respect</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Integrity:</div>
                            <div class="text">Maintaining transparency and ethical practice</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Excellence:</div>
                            <div class="text">Commitment to superior medical care standards</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- mission_vision_values -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection