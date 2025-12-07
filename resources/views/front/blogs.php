<?php include('includes/header.php') ?>

<div class="blogs_page">

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
                <p class="sub_title">Stay informed with expert articles on eye health, treatments, and advanced care. Our blogs simplify complex topics to help you make confident, well-guided decisions.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

<div class="blogs_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="left_pane">
                <div class="blog_boxes">
                    <?php for ($i=0; $i < 6; $i++) { ?>
                        <div class="blog_box">
                            <div class="img_box">
                                <img src="images/blogs/1.png">
                            </div>
                            <div class="text_box">
                                <div class="blog_title">See the doctor for different ways</div>
                                <div class="description">
                                    <p>Ut cupidatat fugiat ullamco dolore tempor minim ut veniam elit officia eiusmod non sunt fugiat est.</p>
                                </div>
                                <div class="lower_txt">
                                    <div class="hospital_name">Orbit Eye Hospital</div>
                                    <div class="time">5 days, 21 hours ago</div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="table_pagination">
                    <div class="clr"></div>
                </div>
            </div>
            <div class="right_pane">
                <ul class="blog_categories">
                    <li><a href="#">Bob</a></li>
                    <li><a href="#">Dante</a></li>
                    <li><a href="#">Randall</a></li>
                    <li><a href="#">Jay</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

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
<!-- blogs_page -->

<?php include('includes/footer.php') ?>