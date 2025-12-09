@extends('front.layout.master')

@section('content')

<div class="blogs_page">

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
                                <img src="{{ asset('front/images/blogs/1.png') }}">
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

@include('front.includes.get-in-touch')

</div>
<!-- blogs_page -->

@endsection