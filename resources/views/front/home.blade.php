@extends('front.layout.master')

@section('content')

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/homepage.jpg') }}">
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
                <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                <a href="tel:+919820504546" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

@include('front.includes.features')

<div class="about_hospital">
    <div class="container">
        <div class="inner_container">
            
            <div class="title">About Hospital</div>
            <div class="text">
                <p class="sub_title">Orbit Eye Hospital delivers world-class eye care since 2006 with expertise in LASIK, cataract,<br> retina, and glaucoma surgeries, using latest technology and compassionate care.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

<div class="why_choose_us">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Why Choose Us?</div>

            <div class="info_boxes">
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/world-class-infrastructure.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">World-Class Infrastructure</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/expert-medical-team.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">Expert Medical Team</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/advanced-technology.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">Advanced Technology</div>
                        <div class="lower_txt">(IOL Master 700, Pentacam, OCT, Fundus Photography)</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/comprehensive-care.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">Comprehensive Care</div>
                        <div class="lower_txt">Under One Roof</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/patient-centric-approach.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">Patient-Centric Approach</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="icon"><img src="{{ asset('front/images/icons/affordable-excellence.png') }}"></div>
                    <div class="text">
                        <div class="upper_txt">Affordable Excellence</div>
                    </div>
                </div>
            </div>

            <div class="btn_wrapper center">
                <a href="#" class="purple_hollow_btn">Know more about us</a>
            </div>

        </div>
    </div>
</div>
<!-- why_choose_us -->

<div class="services">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Services</div>
            <div class="panes_wrapper">
                <div class="left_pane">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services.png') }}">
                    </div>
                </div>
                <div class="right_pane">
                    <div class="three_boxes">

                        <a href="#" class="info_box">
                            <div class="text_box">
                                <div class="service_title">Diagnostic Services :</div>
                                <ul>
                                    <li>Eye exams</li>
                                    <li>Retinal Imaging</li>
                                    <li>Corneal Topography</li>
                                </ul>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <div class="service_title">Specialist Consultations :</div>
                                <ul class="column_2">
                                    <li>Glaucoma</li>
                                    <li>Pediatric eye</li>
                                    <li>Oculoplasty</li>
                                    <li>Cataract</li>
                                    <li>Retina</li>
                                    <li>Cornea</li>
                                </ul>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <div class="service_title">Surgical Procedures :</div>
                                <ul class="column_2">
                                    <li>Cataract</li>
                                    <li>LASIK</li>
                                    <li>Retinal surgery</li>
                                    <li>Glaucoma Surgery</li>
                                    <li>Corneal Transplant</li>
                                    <li>Oculoplastic</li>
                                </ul>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="btn_wrapper center">
                <a href="#" class="purple_hollow_btn">Book a consultation</a>
            </div>

        </div>
    </div>
</div>
<!-- services -->

<!-- <div class="big_video">
    <div class="video_wrapper">
        <video muted autoplay loop>
            <source src="{{ asset('front/videos/sample.mp4') }}" type="video/mp4">
        </video>
    </div>
</div> -->
<!-- big_video -->

<div class="best_team">
    <div class="container">
        <div class="inner_container">
            
            <div class="left_pane">
                <div class="text_box">
                    <div class="text_1">We have</div>
                    <div class="text_2">the best</div>
                    <div class="text_3">Team</div>
                    <div class="sub_text">
                        <p>Ophthalmologists, Optometrists, Nursing<br>& Support Staff, Administrative Team</p>
                    </div>
                </div>
            </div>
            <div class="right_pane">
                <div class="team_banner owl-carousel owl-theme">
                    <?php //for ($i=0; $i < 5; $i++) {  ?>
                        <div class="item_box">
                            <div class="img_box">
                                <img src="{{ asset('front/images/team/dr-ashish-k-jain.jpeg') }}">
                            </div>
                            <div class="text_box">
                                <div class="team_title">Dr. Ashish K. Jain</div>
                                <div class="position">Specialisation in Opthamology(DNB)</div>
                                <div class="description">MS Ophthalmology, Vitreoretinal Surgery Fellowship; manages Diabetic Retinopathy, ARMD, Retinal Detachment.</div>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/instagram.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/facebook.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/twitter.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/youtube.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/linkedin.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item_box">
                            <div class="img_box">
                                <img src="{{ asset('front/images/team/1.png') }}">
                            </div>
                            <div class="text_box">
                                <div class="team_title">Dr. Rutuja Tipnis</div>
                                <div class="position">Consultant ophthalmologist (7+ years)</div>
                                <div class="description">MS Ophthalmology, Vitreoretinal Surgery Fellowship; manages Diabetic Retinopathy, ARMD, Retinal Detachment.</div>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/instagram.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/facebook.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/twitter.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/youtube.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/linkedin.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item_box">
                            <div class="img_box">
                                <img src="{{ asset('front/images/team/dr-lakshmi-kattana.jpeg') }}">
                            </div>
                            <div class="text_box">
                                <div class="team_title">Dr. Lakshmi Kattana</div>
                                <div class="position">Ophthalmologist (15 years)</div>
                                <div class="description">MS DNB, Cornea Fellowship; excels in Phacoemulsification, LASIK/PRK, Keratoplasty.</div>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/instagram.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/facebook.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/twitter.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/youtube.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('front/images/icons/linkedin.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php //} ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- best_team -->

@include('front.includes.video-testimonials')

<div class="blog_section">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Blog</div>

            <div class="panes_wrapper">
                <div class="left_pane">
                    <div class="img_box">
                        <img src="{{ asset('front/images/blogs/left-image.png') }}">
                    </div>
                    <div class="text_overlay">
                        <div class="bg_box">
                            <div class="inner_box">
                                <div class="text_1">blog post</div>
                                <div class="text_2">Explore the trending<br> news from the hosptal</div>
                                <a href="{{ route('blogs') }}" class="text_3">all post</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_pane">
                    @if(!empty($blogs) && count($blogs) > 0)
                        @foreach($blogs as $blog)
                            <a href="{{ url('p/'.$blog->slug) }}" class="blog_box">
                                <div class="img_box">
                                    <img src="{{ asset('uploads/blogs/'.$blog->image_file) }}">
                                </div>
                                <div class="text_box">
                                    <div class="blog_title">{{$blog->title}}</div>
                                    <div class="description">
                                        {!! Str::limit($blog->description, 100) !!}
                                    </div>
                                    <div class="lower_txt">
                                        <div class="hospital_name">Orbit Eye Hospital</div>
                                        <div class="time">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d-M-Y') }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="btn_wrapper center">
                <a href="#" class="purple_hollow_btn">Book a consultation</a>
            </div>

        </div>
    </div>
</div>
<!-- blog_section -->

@include('front.includes.get-in-touch')

@endsection