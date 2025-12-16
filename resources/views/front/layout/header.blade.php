<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>@if(!empty($meta_title)) {{$meta_title}} @else {{ config('app.name') }} @endif</title>
<meta name="description" content="@if(!empty($meta_description)) {{$meta_description}} @else {{ config('app.name') }} @endif" />
<meta name="keywords" content="@if(!empty($meta_keywords)) {{$meta_keywords}} @else {{ config('app.name') }} @endif" />

<link rel="icon" type="image/png" href="{{ asset('front/images/favicon.png') }}">

<!-- Facebook Og Tags -->
<meta property="og:title" content="@if(!empty($meta_title)) {{$meta_title}} @else {{ config('app.name') }} @endif" />
<meta property="og:description" content="@if(!empty($meta_description)) {{$meta_description}} @else {{ config('app.name') }} @endif" />
<meta property="og:url" content="https://mintit.in/" />
 
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:type" content="Website">
<meta property="og:image" content="https://mintit.in/front/images/logo.png">
<!-- End Facebook Og Tags -->

<link href="{{ asset('front/css/reset.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('front/css/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('front/css/animate.4.1.1.css') }}" rel="stylesheet" type="text/css" />

<!---fonts-->
<link href="{{ asset('front/css/fontawesome.7.0.1.min.css') }}" rel="stylesheet" type="text/css" />
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- slider -->
<link href="{{ asset('front/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">

<link href="{{ asset('front/plugins/venobox/venobox.min.css') }}" rel="stylesheet" type="text/css" media="screen" />


<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!--Datepicker-->
<link href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

<link href="{{ asset('front/css/style.css?ver=') }}{{date('Ymdhis')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('front/css/responsive.css?ver=') }}{{date('Ymdhis')}}" rel="stylesheet" type="text/css" />

<script src="{{ asset('front/js/jquery.3.7.1.min.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

</head>

<body>

<header>  

<div class="container">
    <div class="inner_container">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('front/images/logo.png') }}" alt="" /></a>
        </div>
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <!-- <h3>Menu</h3> -->
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <!-- <li>
                    <a>   
                        <span class="title">About</span>
                        <span class="arrow"></span> 
                    </a>
                    <ul>
                        <li><a href="#">Lorem Ipsum 1</a></li>
                    </ul>
                </li> -->
                <li><a href="#">Overview</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('info') }}">Info</a></li>
                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>
        </nav>
        <div class="btn_wrapper">
            <a class="green_filled_btn request_callback">
                <span class="txt">Appoinment</span>
                <span class="icon"><img src="{{ asset('front/images/icons/calender.png') }}"></span>
            </a>
        </div>
    </div>
</div>
</header>
<!-- End of Responsive Menu -->


<div id="main">