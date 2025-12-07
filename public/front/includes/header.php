<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Html Framework</title>
<meta name="description" content="," />
<meta name="keywords" content="" />

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />

<link href="css/animate.4.1.1.css" rel="stylesheet" type="text/css" />

<!---fonts-->
<link href="css/fontawesome.7.0.1.min.css" rel="stylesheet" type="text/css" />
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- slider -->
<link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
<link href="plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">

<link href="plugins/venobox/venobox.min.css" rel="stylesheet" type="text/css" media="screen" />

<link href="css/style.css?ver=<?php echo date('Ymdhis');?>" rel="stylesheet" type="text/css" />
<link href="css/responsive.css?ver=<?php echo date('Ymdhis');?>" rel="stylesheet" type="text/css" />

<!-- <script src="js/jquery.3.7.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>

<header>  

<div class="container">
    <div class="inner_container">
        <div class="logo">
            <a href="./"><img src="images/logo.png" alt="" /></a>
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
                <li><a href="#">About Us</a></li>
                <li><a href="services.php">Service</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="info.php">Info</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="btn_wrapper">
            <a href="#" class="green_filled_btn">
                <span class="txt">Appoinment</span>
                <span class="icon"><img src="images/icons/calender.png"></span>
            </a>
        </div>
    </div>
</div>
</header>
<!-- End of Responsive Menu -->


<div id="main">