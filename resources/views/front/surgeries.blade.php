@extends('front.layout.master')

@section('content')

<div class="surgeries_page">

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

<div class="about_hospital grey_bg">
    <div class="container">
        <div class="inner_container">
            
            <!-- <div class="title">Main Services Overview</div> -->
            <div class="text">
                <p class="sub_title">At Orbit Eye Hospital, we offer advanced surgical solutions backed by precision technology and expert care.<br> From vision correction to complex retinal and oculoplastic procedures, every surgery is<br> designed to restore clarity, comfort, and confidence.</p>
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
                            <span>Refractive </span>
                            <span class="light_txt">Surgeries</span>
                        </div>
                        <p class="description">LASIK, PRK, SMILE, ICL for correction of myopia, hyperopia, and astigmatism</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/refractive-surgeries.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Cataract </span>
                            <span class="light_txt">Surgeries</span>
                        </div>
                        <p class="description">Phacoemulsification with premium intraocular lenses including multifocal, toric, and accommodating types</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/cataract-surgeries.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Retinal </span>
                            <span class="light_txt">Procedures</span>
                        </div>
                        <p class="description">Vitrectomy, retinal detachment repair, laser photocoagulation, intravitreal injections.</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/retinal-procedures.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Glaucoma </span>
                            <span class="light_txt">Surgeries</span>
                        </div>
                        <p class="description">Trabeculectomy, valve implants, laser trabeculoplasty, minimally invasive glaucoma surgeries.</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/glaucoma-surgeries.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Corneal </span>
                            <span class="light_txt">Surgeries</span>
                        </div>
                        <p class="description">Corneal cross-linking, transplant (penetrating and lamellar), keratoplasty</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/corneal-surgeries.jpg') }}">
                    </div>
                </div>
                <div class="info_box">
                    <div class="text_box">
                        <div class="surgery_title">
                            <span>Oculoplastic</span>
                            <span class="light_txt">Surgeries</span>
                        </div>
                        <p class="description">Eyelid reconstruction, ptosis repair, tear duct surgeries, orbital tumor excision.</p>
                        <div class="btn_wrapper">
                            <a href="#" class="purple_hollow_btn">Make an appointment</a>
                        </div>
                    </div>
                    <div class="img_box">
                        <img src="{{ asset('front/images/surgeries/oculoplastic-surgeries.jpg') }}">
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
                @include('front.includes.appointment-form')
            </div>

        </div>
    </div>
</div>

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection