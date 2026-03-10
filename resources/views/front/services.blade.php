@extends('front.layout.master')

@section('content')

<div class="services_page">

<div class="hero">
    <div class="hero_image_slider owl-carousel owl-theme">
        <div class="item_box">
            <div class="img_box">
                <img src="{{ asset('front/images/banners/services.jpg') }}">
            </div>
            <div class="text_overlay">
                <div class="inner_container">
                    <div class="banner_heading">
                        <span>Our</span>
                        <br>
                        <span class="bold">Services</span>
                    </div>
                    <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
                    <div class="banner_btns">
                        <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                        <a href="tel:+919820504546" class="purple_hollow_btn">Call emergency care</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item_box">
            <div class="img_box">
                <img src="{{ asset('front/images/banners/services-2.png') }}">
            </div>
            <div class="text_overlay">
                <div class="inner_container">
                    <div class="banner_heading">
                        <span>Let your eyes</span>
                        <br>
                        <span class="bold">Smile</span>
                    </div>
                    <div class="banner_title">Small Incision Lenticule Extraction</div>
                    <div class="banner_btns">
                        <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                        <a href="tel:+919820504546" class="purple_hollow_btn">Call emergency care</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<div class="service_boxes">

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Catararact <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/catararact-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Cataract Assessment</b> – Stage/type of cataract, visual impact, associated ocular conditions, surgical complexity.</li>
                            <li><b>IOL Master/Biometry</b> – Eye measurements, lens power calculation, refractive target, and accuracy importance.</li>
                            <li><b>IOL Discussion</b> – Monofocal vs premium IOLs, toric for astigmatism, visual expectations.</li>
                            <li><b>Procedure Explanation</b> – Surgery type, anesthesia, steps, duration, safety, discharge plan.</li>
                            <li><b>Recovery & Post-Op Care</b> – Healing period, vision recovery, medications, precautions, follow-ups, warning signs</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Cornea <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/cornea-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Corneal conditions:</b> Corneal infections, keratoconus, corneal scars, dystrophies, degenerations, and surface disorders.</li>
                            <li><b>Examination:</b> Detailed slit-lamp examination of the cornea.</li>
                            <li><b>Investigations:</b> Corneal topography, pachymetry, anterior segment OCT, and corneal scrapings when required.</li>
                            <li><b>Diagnosis:</b> Identification of the cause and severity of corneal disease.</li>
                            <li><b>Treatment:</b> Medical therapy, corneal cross-linking, therapeutic procedures, and corneal transplant surgery.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Retinal <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/retinal-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Retinal disorders:</b> Diabetic retinopathy, retinal detachment, macular degeneration, macular hole, epiretinal membrane, and retinal vascular disorders.</li>
                            <li><b>Examination:</b> Detailed dilated fundus examination of the retina.</li>
                            <li><b>Investigations:</b> OCT, fundus photography, and B-scan ultrasonography when required.</li>
                            <li><b>Diagnosis:</b> Identification of retinal pathology, staging of disease, and assessment of macular involvement.</li>
                            <li><b>Treatment:</b> Medical management, intravitreal injections, laser procedures, and vitreoretinal surgery</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Glaucoma <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/glaucoma-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Glaucoma disorders:</b> Primary open-angle glaucoma, angle-closure glaucoma, secondary glaucoma, and congenital glaucoma.</li>
                            <li><b>Examination:</b> Detailed evaluation of intraocular pressure, optic nerve head, and anterior chamber angle.</li>
                            <li><b>Investigations:</b> Visual field testing, OCT of optic nerve and nerve fiber layer, and gonioscopy.</li>
                            <li><b>Diagnosis:</b> Identification of type and stage of glaucoma with assessment of optic nerve damage.</li>
                            <li><b>Treatment:</b> Medical therapy, laser procedures, and glaucoma surgery for pressure control.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Squint <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/squint-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Squint disorders:</b> Esotropia, exotropia, hypertropia, paralytic and restrictive squint, and pediatric strabismus.</li>
                            <li><b>Examination:</b> Detailed ocular alignment assessment, extraocular muscle evaluation, and binocular vision testing.</li>
                            <li><b>Investigations:</b> Cover–uncover test, prism measurements, and sensory evaluation when required.</li>
                            <li><b>Diagnosis:</b> Identification of type, cause, and severity of squint with assessment of binocular function.</li>
                            <li><b>Treatment:</b> Optical correction, orthoptic exercises, prism therapy, and squint surgery.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Oculoplasty <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/oculoplasty-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Oculoplastic disorders:</b> Eyelid malpositions, ptosis, lacrimal drainage disorders, orbital diseases, and periocular tumors.</li>
                            <li><b>Examination:</b> Detailed evaluation of eyelids, lacrimal system, and orbital structures.</li>
                            <li><b>Investigations:</b> Lacrimal syringing, imaging (USG/CT/MRI) when required, and clinical measurements.</li>
                            <li><b>Diagnosis:</b> Identification of anatomical abnormality and functional impairment.</li>
                            <li><b>Treatment:</b> Medical management and oculoplastic surgeries including ptosis correction, upper and lower eyelid blepharoplasty, entropion/ectropion correction, and DCR</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Refractive <span class="light">specialist</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/refractive-specialist.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Refractive Surgery:</b> Myopia, hyperopia, astigmatism, and presbyopia — managed with LASIK, Femto LASIK, PRK, SMILE, and lens-based refractive procedures.</li>
                            <li><b>Examination:</b> Detailed refraction, corneal assessment, ocular surface evaluation, and retinal screening.</li>
                            <li><b>Investigations:</b> Corneal topography, Pentacam, pachymetry, and tear film assessment.</li>
                            <li><b>Diagnosis:</b> Determination of refractive error type and stability with suitability assessment for refractive surgery.</li>
                            <li><b>Treatment:</b> Customized laser vision correction (Femto LASIK / PRK / SMILE), phakic IOLs, or refractive lens exchange.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading"><span class="light">Difference between</span><br> the PRK, LASIK & SMILE  </div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/difference-between-the-prk-lasik-and-smile.png') }}">
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">SMILE</div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/smile.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>What it treats:</b> Corrects myopia (minus power) and myopic astigmatism with advanced femtosecond laser technology.</li>
                            <li><b>Procedure:</b> Flap-less, blade-free surgery performed through a tiny 2–4 mm incision, preserving better corneal strength.</li>
                            <li><b>Benefits:</b> Less dryness, minimal discomfort, quick procedure (10–15 minutes), and fast visual recovery.</li>
                            <li><b>Eligibility:</b> Age 18+, stable power, adequate corneal thickness (Pentacam evaluation), and healthy eyes.</li>
                            <li><b>Outcome:</b> High safety profile with excellent visual results — helping you achieve freedom from glasses and contact lenses.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

    <div class="service_box">
        <div class="container">
            <div class="inner_container">
                
                <div class="heading">Femto <span class="light">LASIK</span></div>

                <div class="innner_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/services/femto-lasik.png') }}">
                    </div>
                    <div class="text_box">
                        <ul>
                            <li><b>Blade-free procedure</b> – Uses a femtosecond laser instead of a blade.</li>
                            <li><b>More precise flap creation</b> – Better control over thickness and shape. Better than blade LASIK</li>
                            <li><b>Lower risk of flap complications</b> – Safer and more predictable.</li>
                            <li><b>Better for thin corneas</b> – Suitable for many patients.</li>
                        </ul>
                        <button class="purple_hollow_btn request_callback" type="button">Make an Appointment</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- service_box --}}

</div>
{{-- service_boxes --}}

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection