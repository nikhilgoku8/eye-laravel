@extends('front.layout.master')

@section('content')

<div class="team_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/team.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Our</span>
                <br>
                <span class="bold">Expert Team</span>
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

<div class="about_hospital grey_bg">
    <div class="container">
        <div class="inner_container">
            
            <!-- <div class="title">Main Services Overview</div> -->
            <div class="text">
                <p class="sub_title">At Orbit Eye Hospital, our medical team combines expertise, compassion, and cutting-edge skill to deliver exceptional eye care. Led by highly trained ophthalmologists, our specialists work collaboratively to diagnose, treat, and manage a wide spectrum of eye conditions with precision. Each member of our team is committed to patient comfort, transparent communication, and personalized treatment plans. With a strong focus on safety, ethics, and advanced clinical practices, we ensure every patient receives world-class care at every step of their journey.</p>
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
                            <span>Ophthalmologists</span>
                        </div>
                        <p class="description">A team of highly experienced, board-certified ophthalmologists specializing in various eye care disciplines including cataract surgery, retina, cornea, glaucoma, and pediatric ophthalmology.</p>
                        <div class="btn_wrapper">
                            <button class="purple_hollow_btn request_callback">Make an appointment</button>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/team/ophthalmologists.jpg') }}">
                    </div>
                </div>
                <div class="info_box optometrists">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Optometrists</span>
                        </div>
                        <div class="description">
                            <p><b>Supriya:</b><br>
                            Supriya Ghosh, a clinical optometrist at Orbit Eye Hospital, brings 12 years of experience, with 6 years at OEH. Holding a bachelor's from the Institute of Technology and Management (Panvel), she excels in patient eye care, from examinations to disease detection and medication advice.</p>
                            <p><b>Yasmeen:</b><br>
                            Yasmeen Mulani is an experienced optometrist specializing in low vision and therapeutic contact lenses, holding a clinical fellowship from LV Prasad Eye Institute. With seven years of expertise, including five years as a Consultant Optometrist and trainer at Orbit Eye Hospital, she excels in eye examinations, treatment planning, and patient counseling, particularly in surgical procedures.</p>
                            <p><b>Veronica:</b><br>
                            Veronica Chetty is an experienced optometrist and counsellor with over 10 years in the field of optometry. She has been associated with Orbit Eye Hospital for the past four years, where she is actively involved in patient workups for LASIK and cataract procedures. Her role includes detailed pre-operative assessments and patient counselling.</p>
                            <!-- <p>Certified professionals providing comprehensive eye exams, vision correction, and pre/post-surgical evaluations</p> -->
                        </div>
                        <div class="btn_wrapper">
                            <button class="purple_hollow_btn request_callback">Make an appointment</button>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/team/optometrists.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Nursing and Support Staff</span>
                        </div>
                        <p class="description">Well-trained nursing staff and technical assistants ensuring patient comfort, pre-operative preparation, and post-operative care.</p>
                        <div class="btn_wrapper">
                            <button class="purple_hollow_btn request_callback">Make an appointment</button>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/team/nursing-and-support-staff.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Administrative Team</span>
                        </div>
                        <p class="description">Dedicated personnel managing appointments, patient records, insurance, and customer service</p>
                        <div class="btn_wrapper">
                            <button class="purple_hollow_btn request_callback">Make an appointment</button>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/team/administrative-team.jpg') }}">
                    </div>
                </div>

            </div>
            <!-- surgeries_boxes -->

        </div>
    </div>
</div>
<!-- img_txt_box_wrapper -->

<div class="make_an_appointment">
    <div class="container">
        <div class="inner_container">
            
            <div class="title center">Make an appoinment</div>
            <div class="sub_title center">We will send you a confirmation within 24 hours.</div>
            <div class="form_wrapper">
                <form>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Department">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Doctor">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input_box">
                            <input type="text" name="name" placeholder="Message">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input_box center">
                            <button type="submit" class="purple_filled_btn">submit</button>
                        </div>
                    </div>
                    <div class="clr"></div>
                </form>
            </div>

        </div>
    </div>
</div>

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection