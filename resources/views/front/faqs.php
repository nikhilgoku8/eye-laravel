<?php include('includes/header.php') ?>

<div class="faqs_page">

<div class="hero">
    <div class="img_box">
        <img src="images/banners/surgeries.png">
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

<div class="feature_boxes">
    <div class="container">
        <div class="inner_container">
            
            <div class="info_box">
                <div class="icon"><img src="images/icons/experience.png"></div>
                <div class="text">19+ Years of<br> Excellence in Eye Care</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="images/icons/surgeries.png"></div>
                <div class="text">50,000+ <br> Successful Surgeries</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="images/icons/technology.png"></div>
                <div class="text">Advanced <br> Diagnostic Technology</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="images/icons/team.png"></div>
                <div class="text">Experienced <br> Specialist Team</div>
            </div>

        </div>
    </div>
</div>
<!-- feature_boxes -->

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

<div class="get_in_touch">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-5">
                <div class="left_pane">
                    <div class="title">get in touch <span class="line"></span></div>
                    <ul class="ctc_info">
                        <li>Address : 1st floor, W, Aftab Classic, SV Rd, opp.<br> City Hospital, Raj Nagar, Gautam Nagar, Jogeshwari<br> West, Mumbai, Maharashtra 400102</li>
                        <li>Phone: <a href="#">098201 66630</a> </li>
                        <li>Email: <a href="#">xxxxxxx</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <div class="form_wrapper">
                    <form>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Message">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <button type="submit" class="purple_filled_btn">submit</button>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </form>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- get_in_touch -->

</div>
<!-- services_page -->

<?php include('includes/footer.php') ?>