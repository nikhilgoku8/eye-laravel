@extends('front.layout.master')

@section('content')

<div class="services_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/services.jpg') }}">
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

<div class="about_hospital main_services">
    <div class="container">
        <div class="inner_container">
            
            <div class="title">Main Services Overview</div>
            <div class="text">
                <p class="sub_title">At Orbit Eye Hospital, we provide complete and compassionate eye care—combining expert consultation,<br> advanced diagnostics, and modern surgical facilities under one roof.</p>
            </div>

        </div>
    </div>
</div>
<!-- main_services -->

<div class="eye_examination">
    <div class="contain_90">
        <div class="inner_container">
            
            <div class="heading">Comprehensive Eye Examination</div>
            <p class="sub_text">Complete eye evaluations for patients of all ages, including:</p>

            <div class="six_boxes">
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/visual-acuity-and-refraction-assessment.png') }}">
                    </div>
                    <div class="text_box">Visual acuity and refraction assessment</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/slit-lamp-examination.png') }}">
                    </div>
                    <div class="text_box">Slit-lamp examination</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/fundus-and-retinal-check-up.png') }}">
                    </div>
                    <div class="text_box">Fundus and retinal check-up</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/intraocular-pressure-measurement.png') }}">
                    </div>
                    <div class="text_box">Intraocular pressure measurement</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/color-vision-and-contrast-sensitivity-testing.png') }}">
                    </div>
                    <div class="text_box">Color vision and contrast sensitivity testing</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/binocular-vision-assessment.png') }}">
                    </div>
                    <div class="text_box">Binocular vision assessment</div>
                </div>
            </div>
            <p class="sub_text_2">Ideal for early detection of cataract, glaucoma, diabetic retinopathy, macular degeneration, and more.</p>

        </div>
    </div>
</div>

<div class="light_green_boxes">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Specialist Consultations</div>

            <div class="info_boxes">
                <div class="info_box">
                    <div class="text">Cataract Specialist</div>
                </div>
                <div class="info_box">
                    <div class="text">Detailed cataract assessment</div>
                </div>
                <div class="info_box">
                    <div class="text">IOL selection guidance</div>
                </div>
                <div class="info_box">
                    <div class="text">Pre and post-operative care</div>
                </div>
                <div class="info_box">
                    <div class="text">Premium IOL options (Multifocal, Toric, EDOF)</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- light_green_boxes -->

<div class="retina_specialist">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Retina Specialist</div>
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
                                <p>Management of diabetic retinopathy, retinal detachment, AMD</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Intravitreal injections and laser therapies</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Vitrectomy Surgery</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Corneal Specialist</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Treatment for keratoconus, corneal ulcers, dystrophies</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Corneal cross-linking and transplant</p>
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

<div class="glaucoma_specialist">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Glaucoma Specialist</div>

            <div class="two_boxes">
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/monitoring-and-lowering-intraocular-pressure.png') }}">
                    </div>
                    <div class="text_box">Monitoring and lowering intraocular pressure</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/laser-and-surgical-interventions.png') }}">
                    </div>
                    <div class="text_box">Laser and surgical interventions</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- glaucoma_specialist -->

<div class="two_services">
    <div class="container">
        <div class="inner_container">
            
            <div class="two_boxes">
                <div class="info_box">
                    <div class="heading">Pediatric<br> Ophthalmologist</div>
                    <div class="inner_box">
                        <div class="img_box">
                            <img src="{{ asset('front/images/services/pediatric-ophthalmologist.png') }}">
                        </div>
                        <div class="text_box">Eye exams for children including squint, amblyopia, pediatric cataract</div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="heading">Oculoplasty<br> Expert</div>
                    <div class="inner_box">
                        <div class="img_box">
                            <img src="{{ asset('front/images/services/oculoplasty-expert.png') }}">
                        </div>
                        <div class="text_box">Eyelid surgery, tear duct obstruction, orbital surgery</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- two_services -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection