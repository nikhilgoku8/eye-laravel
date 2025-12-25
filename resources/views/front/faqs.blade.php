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
                <a href="tel:+919820166630" class="purple_hollow_btn">Call emergency care</a>
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
                        <li><a href="#tab1">Bob</a></li>
                        <li><a href="#tab2">Dante</a></li>
                        <li><a href="#tab3">Randall</a></li>
                        <li><a href="#tab4">Jay</a></li>
                    </ul> <!-- END tabs-nav -->
                </div>
                <div class="right_pane">
                    <div id="tabs-content">
                        <div id="tab1" class="tab-content">
                            <div class="accordion-container">
                                <div class="accordion-item">
                                    <h3 class="accordion-title">Section 1 Title</h3>
                                    <div class="accordion-content">
                                        <p>Content for section 1.</p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-title">Section 2 Title</h3>
                                    <div class="accordion-content">
                                        <p>Content for section 2.</p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-title">Section 3 Title</h3>
                                    <div class="accordion-content">
                                        <p>Content for section 3.</p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-title">Section 4 Title</h3>
                                    <div class="accordion-content">
                                        <p>Content for section 4.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content">
                            <h2>Dante Hicks</h2>
                            <p>"My friend here's trying to convince me that any independent contractors who were working on the uncompleted Death Star were innocent victims when it was destroyed by the Rebels."</p>
                        </div>
                        <div id="tab3" class="tab-content">
                            <h2>Randall Graves</h2>
                            <p>"In light of this lurid tale, I don't even see how you can romanticize your relationship with Caitlin. She broke your heart and inadvertently drove men to deviant lifestyles."</p>
                        </div>
                        <div id="tab4" class="tab-content">
                            <h2>Jay</h2>
                            <p>"I don't care if she's my cousin or not, I'm gonna knock those boots again tonight."</p>
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