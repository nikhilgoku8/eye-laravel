@extends('front.layout.master')

@section('content')

<div class="eye_diseases_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/diseases.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Eye</span>
                <br>
                <span class="bold">Diseases</span>
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

<div class="txt_overlay_image_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Eye diseases</div>

            <div class="info_boxes">

                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/cataract.png') }}">
                    </div>
                    <div class="text_overlay">
                        <div class="inner_box">
                            <div class="title">Cataract</div>
                            <div class="text">
                                <p><b>Causes:</b> Aging, diabetes, trauma, UV exposure </p>
                                <p><b>Symptoms:</b> Blurred vision, glare, halos</p>
                                <p><b>Treatment:</b> Surgery with IOL implantation</p>
                            </div>
                            <div class="btn_wrapper">
                                <a href="#" class="purple_hollow_btn">Book an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/glaucoma.png') }}">
                    </div>
                    <div class="text_overlay">
                        <div class="inner_box">
                            <div class="title">Glaucoma</div>
                            <div class="text">
                                <p><b>Causes:</b> Elevated intraocular pressure damaging optic nerve</p>
                                <p><b>Symptoms:</b> Peripheral vision loss, eye pain in acute cases</p>
                                <p><b>Treatment:</b> Eye drops, laser, surgery</p>
                            </div>
                            <div class="btn_wrapper">
                                <a href="#" class="purple_hollow_btn">Book an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/diabetic-retinopathy.png') }}">
                    </div>
                    <div class="text_overlay">
                        <div class="inner_box">
                            <div class="title">Diabetic Retinopathy</div>
                            <div class="text">
                                <p><b>Causes:</b> Damage to retinal blood vessels due to prolonged high blood sugar </p>
                                <p><b>Symptoms:</b> Blurred vision, floaters, dark spots, sudden vision changes </p>
                                <p><b>Treatment:</b>  Laser photocoagulation, intravitreal injections, vitrectomy</p>
                            </div>
                            <div class="btn_wrapper">
                                <a href="#" class="purple_hollow_btn">Book an appointment</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- info_boxes -->

        </div>
    </div>
</div>
<!-- txt_overlay_image_wrapper -->

<div class="light_green_boxes">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Additional Diseases Covered </div>

            <div class="info_boxes">
                <div class="info_box">
                    <div class="text">Age-Related Macular Degeneration (AMD)</div>
                </div>
                <div class="info_box">
                    <div class="text">Retinal Detachment</div>
                </div>
                <div class="info_box">
                    <div class="text">Keratoconus</div>
                </div>
                <div class="info_box">
                    <div class="text">Dry Eye Syndrome</div>
                </div>
                <div class="info_box">
                    <div class="text">Amblyopia (Lazy Eye)</div>
                </div>
                <div class="info_box">
                    <div class="text">Strabismus (Squint)</div>
                </div>
                <div class="info_box">
                    <div class="text">Uveitis</div>
                </div>
                <div class="info_box">
                    <div class="text">Corneal Ulcers</div>
                </div>
                <div class="info_box">
                    <div class="text">Ocular Surface Disorders</div>
                </div>
                <div class="info_box">
                    <div class="text">And many more (up to 31 conditions)</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- light_green_boxes -->

<div class="retina_specialist">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Advanced Diagnostic Tools</div>
            <div class="panes_wrapper">
                <div class="left_pane">
                    <div class="img_box">
                        <img src="{{ asset('front/images/advanced-diagnostic-tools.png') }}">
                    </div>
                </div>
                <div class="right_pane">
                    <div class="three_boxes">

                        <a href="{{ asset('front/pdf/iol-master-700-biometry-for-precise-eye-measurements-for-surgery-planning.pdf') }}" target="_blank" class="info_box">
                            <div class="text_box">
                                <p>IOL Master 700 Biometry for precise eye measurements for surgery planning </p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Pentacam for 3D corneal mapping and anterior segment analysis</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="{{ asset('front/pdf/optical-coherence-tomography-(oct)-for-detailed-retinal-imaging.pdf') }}" target="_blank" class="info_box">
                            <div class="text_box">
                                <p>Optical Coherence Tomography (OCT) for detailed retinal imaging</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Fundus Photography & Fluorescein Angiography for retinal vessel examination</p>
                            </div>
                            <div class="arrow_box">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </div>
                        </a>
                        <a href="#" class="info_box">
                            <div class="text_box">
                                <p>Visual Field Testing (Perimetry) for glaucoma and neurological </p>
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
<!-- retina_specialist -->

<div class="eye_examination">
    <div class="contain_90">
        <div class="inner_container">
            
            <div class="heading">Surgical Equipment</div>

            <div class="six_boxes">
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/centurion-vision-system-for-precision-cataract-surgery.png') }}">
                    </div>
                    <div class="text_box">CENTURION Vision System for precision cataract surgery</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/el-90-excimer-laser-for-lasik-prk-and-refractive-corrections.png') }}">
                    </div>
                    <div class="text_box">SCHWIND AMARIS 500e Excimer Laser for LASIK, PRK, and refractive corrections</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/femto-ldv-z8-femtosecond-laser-for-bladeless-surgery.png') }}">
                    </div>
                    <div class="text_box">Visumax 500 Femtosecond Laser for bladeless surgery</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/advanced-vitrectomy-machines-for-retinal-surgeries.png') }}">
                    </div>
                    <div class="text_box">Lumera I microscope and Zeiss Callisto for image guided surgery</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/argon-laser-system-for-glaucoma.png') }}">
                    </div>
                    <div class="text_box">Argon Laser system for glaucoma</div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/diseases/yag-laser-system-for-posterior-capsulotomy.png') }}">
                    </div>
                    <div class="text_box">YAG Laser system for posterior capsulotomy</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- eye_examination -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection