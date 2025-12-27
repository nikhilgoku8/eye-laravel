@extends('front.layout.master')

@section('content')

<div class="faqs_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/surgeries.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Frequently Asked</span>
                <br>
                <span class="bold">Questions</span>
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
                <p class="sub_title">Our FAQ section provides clear, simple answers to common queries about treatments, appointments, and care, helping you feel informed, prepared, and confident throughout your eye-care journey.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

<div class="faqs_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="tabs_wrapper">
                <div class="left_pane">
                    <ul id="tabs-nav">
                        <li><a href="#tab1">General Eye Care</a></li>
                        <li><a href="#tab2">Cataract</a></li>
                        <li><a href="#tab3">Glaucoma</a></li>
                        <li><a href="#tab4">Diabetic Retinopathy</a></li>
                        <li><a href="#tab5">LASIK and Surgeries</a></li>
                        <li><a href="#tab6">Appointments and Contact</a></li>
                    </ul> <!-- END tabs-nav -->
                </div>
                <div class="right_pane">
                    <div id="tabs-content">
                        <div id="tab1" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How often should I get an eye examination?</h3>
                                    <div class="accordion-content">
                                        <p>Adults should have comprehensive eye exams every 1-2 years, or annually if over 40, diabetic, or at risk for glaucoma; children need exams before school and periodically.</p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-title">Can children get eye exams here?</h3>
                                    <div class="accordion-content">
                                        <p>Yes, Orbit Eye Hospital offers pediatric ophthalmology services, including exams for strabismus, lazy eye, and congenital issues, handled by specialists like Dr. Priyanka Vora Bapat.</p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-title">What should I expect during my first visit?</h3>
                                    <div class="accordion-content">
                                        <p>Initial checks include visual acuity, eye pressure (especially for glaucoma risk), retinal photography, and lifestyle questionnaire; the full test takes about 30 minutes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What causes cataracts and who is at risk?  </h3>
                                    <div class="accordion-content">
                                        <p>Cataracts cloud the lens due to aging, diabetes, smoking, UV exposure, or injury; risk factors include obesity, high blood pressure, and prolonged steroid use.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How is cataract surgery performed at Orbit Eye Hospital?</h3>
                                    <div class="accordion-content">
                                        <p>Using advanced Ozil phacoemulsification in a 2.2mm micro-incision, the cloudy lens is replaced with a foldable hydrophobic IOL; it’s outpatient with no stitches.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What is the recovery process after cataract surgery?</h3>
                                    <div class="accordion-content">
                                        <p>Patients resume normal life the next day; vision improves quickly with negligible complications, backed by over 50,000 successful surgeries at the hospital.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What are the early symptoms of glaucoma?  </h3>
                                    <div class="accordion-content">
                                        <p>Often asymptomatic early on, but signs include gradual vision loss, eye pain, halos around lights, or blurred vision; family history increases risk.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How is glaucoma diagnosed and treated?  </h3>
                                    <div class="accordion-content">
                                        <p>Diagnosis via eye pressure checks, slit-lamp exams, and retinal imaging; treatments include eye drops, laser, or microsurgery to drain fluid, led by experts like Dr. Susheel Deshmukh.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">Can glaucoma be prevented or managed long-term?</h3>
                                    <div class="accordion-content">
                                        <p>Early detection via regular exams manages it effectively; Orbit’s glaucoma specialists use advanced techniques for over 2,000 successful surgeries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How does diabetes affect eye health?  </h3>
                                    <div class="accordion-content">
                                        <p>High blood sugar damages retinal blood vessels, causing leakage, swelling, or abnormal growth, leading to vision loss if untreated.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What treatments are available for diabetic retinopathy?  </h3>
                                    <div class="accordion-content">
                                        <p>Vitreoretinal surgery, laser therapy, or injections by specialists like Dr. Aniruddha Mahindrakar address complications such as retinal detachment.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How often should diabetic patients get screened?  </h3>
                                    <div class="accordion-content">
                                        <p>Annually or more frequently based on risk; Orbit recommends detailed retinal exams during routine visits.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What is the typical recovery time after LASIK?</h3>
                                    <div class="accordion-content">
                                        <p>Most patients regain visual clarity in days, with full healing in weeks; Orbit has performed thousands with experienced surgeons.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">Who is a good candidate for LASIK surgery?</h3>
                                    <div class="accordion-content">
                                        <p>Adults 18+ with stable vision, healthy corneas, and no severe dry eyes; consultations assess suitability.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">Do you accept insurance for surgeries?  </h3>
                                    <div class="accordion-content">
                                        <p>Orbit offers affordable pricing like Rs 14,999 per eye for cataracts; contact them directly for insurance details and coverage options.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">How do I book an appointment?</h3>
                                    <div class="accordion-content">
                                        <p>Book online via their website, call +91-98201 66630, or use the quick enquiry form for consultations or eye tests.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">What are your emergency care hours? </h3>
                                    <div class="accordion-content">
                                        <p>Emergency services are available; call the hospital at 1st Floor, Aftab Classic, SV Rd, Jogeshwari West, Mumbai.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-title">Where is Orbit Eye Hospital located in Mumbai?</h3>
                                    <div class="accordion-content">
                                        <p>1st Floor, W, Aftab Classic, SV Rd, opp. City Hospital, Jogeshwari West, Mumbai 400102.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$(document).ready(function() {
  $('.accordion-title').click(function() {

    $('.accordion-title').not(this).removeClass('active');
    $(this).toggleClass('active');

    $('.accordion-content').removeClass('active');
    // Toggle the visibility of the content associated with the clicked title
    $(this).next('.accordion-content').addClass('active').slideToggle();

    // Optional: Collapse other open sections
    $('.accordion-title').not(this).next('.accordion-content').slideUp();
  });
});
</script>

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection