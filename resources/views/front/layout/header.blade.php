<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>@if(!empty($meta_title)) {{$meta_title}} @else MINTIT @endif</title>
<meta name="description" content="@if(!empty($meta_description)) {{$meta_description}} @else MINTIT @endif" />
<meta name="keywords" content="@if(!empty($meta_keywords)) {{$meta_keywords}} @else MINTIT @endif" />

<link rel="icon" type="image/png" href="{{ asset('front/images/favicon.png') }}">

<!-- Facebook Og Tags -->
<meta property="og:title" content="@if(!empty($meta_title)) {{$meta_title}} @else MINTIT @endif" />
<meta property="og:description" content="@if(!empty($meta_description)) {{$meta_description}} @else MINTIT @endif" />
<meta property="og:url" content="https://mintit.in/" />
 
<meta property="og:site_name" content="MINTIT">
<meta property="og:type" content="Website">
<meta property="og:image" content="https://mintit.in/front/images/logo.png">
<!-- End Facebook Og Tags -->

<link href="{{ asset('front/css/reset.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('front/css/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" type="text/css" />

<!---fonts-->
<link href="{{ asset('front/css/fontawesome-5.15.3.css') }}" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!---menu-->
<!-- <link rel="stylesheet" href="{{ asset('front/css/menu-style.css') }}" type="text/css" media="all" /> -->

<!-- slider -->
<link href="{{ asset('front/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('front/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('front/venobox/venobox.css') }}" type="text/css" media="screen" />

<link rel="stylesheet" href="{{ asset('front/plugins/beefup/jquery.beefup.css') }}" type="text/css" media="screen" />

<!-- accordion -->
<link rel="stylesheet" href="{{ asset('front/css/accordian.css') }}" />
<link rel="stylesheet" href="{{ asset('front/css/lilo-accordion.css') }}" />

<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css"> -->

<link href="{{ asset('front/css/style.css') }}?version=1.1.1" rel="stylesheet" type="text/css" />
<link href="{{ asset('front/css/responsive.css') }}?version=1.1.1" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ asset('front/js/jquery.3.3.1.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<link rel="stylesheet" type="text/css" href="https://www.waterindia.in/festival-assets/festival.css">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q6WCFFKL7N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q6WCFFKL7N');
</script>

<meta name="google-site-verification" content="EHgc2HhhipL6dOsruIyk3Kg_Z2491BB0MKO0c-6IPe4" />

</head>

<body>

<header>  

<div class="container">
    <div class=inner_container>
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('front/images/logo.png') }}" alt="Logo - MINTIT" title="Logo - MINTIT"></a>
        </div>
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="#">Invest</a>
                    <ul>
                        <li><a href="{{ url('mutual-funds') }}">Mutual Funds</a></li>
                        <li><a href="{{ url('portfolio-management-services') }}">Portfolio Management Services</a></li>
                        <li><a href="{{ url('alternate-investment-funds') }}">Alternate Investment Funds</a></li>
                        <li><a href="{{ url('fixed-deposit') }}">Fixed Deposits</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Features</a>
                    <ul>
                        <!-- <li><a href="#">Calculator</a></li> -->
                        <li><a href="{{ url('set-a-milestone') }}">Set a Milestone</a></li>
                        <li><a href="{{ url('financial-pyramid') }}">Financial Pyramid</a></li>
                        <li><a href="{{ url('consolidate-and-track') }}">Consolidate & Track</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Learn</a>
                    <ul>
                        <li><a href="{{ url('blogs') }}">Blogs</a></li>
                        <li><a href="https://www.youtube.com/@mintitapp" target="_blank">YouTube</a></li>
                        <li><a href="{{ url('mutual-fund-explained') }}">Mutual Fund Explained</a></li>
                        <li><a href="{{ url('success-tales') }}">Success Tales</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <span class="c2a_btn">
            <a href="https://app.mintit.in/" target="_blank" class="hollow_purple_btn">Log In / Sign Up</a>
        </span>
        <!--<span class="c2a_btn">-->
        <!--    <a class="filled_purple_btn request_callback">Download App <i class="fas fa-download"></i></a>-->
        <!--</span>-->
    </div>
</div>
</header>
<!-- End of Responsive Menu -->


<div id="main">