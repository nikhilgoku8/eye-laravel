@extends('front.layout.master')

@section('content')

<div class="festival_box">
    <div class="loading_box">
        <div class="loading_icon"></div>
    </div>
    <div class="festival_content_wrapper">
        <div class="festival_content">
            <img src="" alt="" title="" id="festival_img">
            <video muted id="festival_video_wrapper">
                <source src="" type="" id="festival_video">
            </video>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://www.waterindia.in/festival-assets/festival.js"></script>
  
<!-- <div class="banner">
    <div class="main_banner owl-carousel owl-theme">    
        <div class="item_box">
            <img src="{{ asset('front/images/banners/banner-1.jpg') }}" alt="" title="">
        </div>
    </div>
</div> -->

<div class="hero">
    <div class="inner_container">
        <div class="left_info">
            <h1 class="heading">The Only Dedicated <br> <span class="pink">Mutual Fund</span> <br> App In India</h1>
            <!--<div class="c2a_btn">-->
            <!--    <a href="#" class="filled_purple_btn request_callback">Download app <i class="fas fa-download"></i></a>-->
            <!--</div>-->
            <!-- <p class="sub_text">Available on AppStore & PlayStore</p> -->
            <br>
            <br>
            <div class="download_info">
                <a href="https://play.google.com/store/apps/details?id=com.mintit.in&pli=1" target="_blank"><img src="{{ asset('front/images/google-play.png') }}" alt="Google Play - MINTIT" title="Google Play - MINTIT"></a>
               <a href="https://apps.apple.com/in/app/mintit/id6737547969" target="_blank"><img src="{{ asset('front/images/app-store.png') }}" alt="App Store - MINTIT" title="App Store - MINTIT"></a>
               <!-- <a href="https://apps.apple.com/us/app/mintit/id6737547969" target="_blank" class="request_callback"><img src="{{ asset('front/images/app-store.png') }}" alt="App Store - MINTIT" title="App Store - MINTIT"></a> -->
            </div>
        </div>
        <div class="video_box">
            <video autoplay muted loop>
                <source src="{{ asset('front/videos/hero.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>
<!-- hero end -->

<div class="why_mintit">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-6">
                <div class="left_text">
                    <div class="heading">Invest with Purpose, <span class="pink">Track with Ease</span></div>
                    <p>Your financial needs are different from everyone else's, so why settle for investment ideas that are common for all? MINTIT helps you define what you're saving for and builds bridges to your riches.</p>
                    <!--<a href="#" class="filled_purple_btn request_callback">Download App <i class="fas fa-download"></i></a>-->
                </div>
            <!--    <div class="download_info">-->
            <!--    <a href="https://play.google.com/store/apps/details?id=com.mintit.in&pli=1" target="_blank" ><img src="{{ asset('front/images/google-play.png') }}" alt="Google Play - MINTIT" title="Google Play - MINTIT"></a>-->
            <!--   <a href="https://apps.apple.com/us/app/mintit/id6737547969" target="_blank"><img src="{{ asset('front/images/app-store.png') }}" alt="App Store - MINTIT" title="App Store - MINTIT"></a>-->
            <!--</div>-->
            </div>
            <div class="col-sm-6">
                <div class="video_box">
                    <video autoplay muted loop poster="">
                        <source src="{{ asset('front/videos/why-mintit.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- why_mintit end -->

<div class="milestone">
    <!-- <div class="container"> -->
        <div class="inner_container">
            
            <div class="heading">Every Milestone <span class="pink">Marks a Victory</span> </div>
            <div class="title">Celebrate Your Financial Progress with MINTIT Milestones</div>
            <div class="milestones_slider_wrapper">
                <div class="info_boxes milestones_slider owl-carousel owl-theme">
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/home-sweet-home.png') }}" alt="Home Sweet Home - MINTIT" title="Home Sweet Home - MINTIT"></div>
                        <div class="title">Home Sweet Home </div>
                        <p>Create a plan to buy your own home.</p>
                    </div>
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/higher-studies.png') }}" alt="Young Scholars - MINTIT" title="Young Scholars - MINTIT"></div>
                        <div class="title">Young Scholars</div>
                        <p>Invest in your little champ’s future.</p>
                    </div>
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/second-innings.png') }}" alt="Second Innings - MINTIT" title="Second Innings - MINTIT"></div>
                        <div class="title">Second Innings</div>
                        <p>Retire on your own terms.</p>
                    </div>
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/the-emergency.png') }}" alt="The Emergency - MINTIT" title="The Emergency - MINTIT"></div>
                        <div class="title">The Emergency</div>
                        <p>Some certainty for uncertainty.</p>
                    </div>
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/corerpatti.png') }}" alt="Crorepati - MINTIT" title="Crorepati - MINTIT"></div>
                        <div class="title">Crorepati</div>
                        <p>Set your path to become Wealthy.</p>
                    </div>
                    <div class="info_box">
                        <div class="icon"><img src="{{ asset('front/images/icons/big-vacation.png') }}" alt="Big Vacation - MINTIT" title="Big Vacation - MINTIT"></div>
                        <div class="title">Big Vacation</div>
                        <p>Plan that comforts you even for Unplanned Vacations.</p>
                    </div>
                </div>
            </div>

        </div>
    <!-- </div> -->
</div>
<!-- milestone end -->

<div class="how_it_works">
    <div class="container">
        <div class="heading">The MINTIT <span class="pink">Advantage</span></div>
        <div class="title">Personalised and Milestone based  <br>Investing, Made Easy.</div>
        <div class="inner_container">
            
            <div class="col-sm-8">
                <div class="img_box">
                    <img src="{{ asset('front/images/how-it-works.png') }}" alt="Personalised and Milestone - MINTIT" title="Personalised and Milestone - MINTIT">
                </div>
                
                <!-- <div class="video_box">
                    <video autoplay muted loop poster="">
                        <source src="{{ asset('front/videos/how-it-works.mp4') }}" type="video/mp4">
                    </video>
                </div> -->
            </div>
            <div class="col-sm-4">
                <div class="text_box">
                    <p><b>Personalised</b>: Discover strategies that are tailored to your financial milestones and risk profile.</p>
                    <p><b>Simplified</b>: Say goodbye to investment complexities. We have simplified your investment journey.</p>
                    <p><b>Goal-Focused Approach</b>: Track progress and stay motivated with milestones aligned to your aspirations.</p>
                    <p><b>Data-Driven Insights</b>: Make informed decisions powered by clear analysis and expert suggestions.</p>
                    <!-- <a href="#" class="filled_purple_btn">Download app <i class="fas fa-download"></i></a> -->
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- how_it_works end -->

<div class="investment_plan">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading center">Your Diverse <span class="pink">Opportunities </span> </div>
            <div class="info_boxes mintit-services">
                <div class="col-sm-4">
                    <div class="info_box info_box_1">
                        <div class="icon"><img src="{{ asset('front/images/icons/mutual-funds.png') }}" alt="Mutual Funds - MINTIT" title="Mutual Funds - MINTIT"></div>
                        <div class="sub_title">Mutual Funds</div>
                        <p>Explore different mutual funds, understand their attributes, and invest directly in the funds best suited to your needs.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="info_box info_box_2">
                        <div class="icon"><img src="{{ asset('front/images/icons/portfolio-management-services.png') }}" alt="Portfolio Management Services - MINTIT" title="Portfolio Management Services - MINTIT"></div>
                        <div class="sub_title">Portfolio Management Services (PMS)</div>
                        <p>Access to professional portfolio managers who actively manage your investments to maximise returns.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="info_box info_box_3">
                        <div class="icon"><img src="{{ asset('front/images/icons/alternate-investment-funds.png') }}" alt="Alternative Investment Funds - MINTIT" title="Alternative Investment Funds - MINTIT"></div>
                        <div class="sub_title">Alternative Investment Funds (AIFs)</div>
                        <p>Unique investment opportunities like venture capital, private equity, and hedge funds.</p>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="four_traingles">
                <div class="triangles_wrapper">
                    <!-- <img src="{{ asset('front/images/icons/traingles.png') }}"> -->
                    <span class="triangle_1">
                        <img src="{{ asset('front/images/icons/triangle-blue.png') }}" alt="Triangle Blue - MINTIT" title="Triangle Blue - MINTIT">
                    </span>
                    <span class="triangle_2">
                        <img src="{{ asset('front/images/icons/triangle-pink.png') }}" alt="Triangle Pink - MINTIT" title="Triangle Pink - MINTIT">
                    </span>
                    <span class="triangle_3">
                        <img src="{{ asset('front/images/icons/triangle-green.png') }}" alt="Triangle Green - MINTIT" title="Triangle Green - MINTIT">
                    </span>
                    <span class="triangle_4">
                        <img src="{{ asset('front/images/icons/triangle-orange.png') }}" alt="Triangle Orange - MINTIT" title="Triangle Orange - MINTIT">
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- investment_plan end -->

<div class="not_started">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-5">
                <div class="info_box">
                    <div class="heading">Not Started, <span class="pink">Yet?</span> </div>
                    <!-- <p>Don’t wait. Invest today. <br>Own a future you would be grateful for</p> -->
                    <p>Invest now and  <br>thank yourself for a rewarding tomorrow</p>
                    <a href="{{ url('mutual-funds') }}" class="filled_purple_btn">Start Investing</a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="video_box">
                    <video autoplay muted loop>
                        <source src="{{ asset('front/videos/not-started-yet.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- not_started end -->

<!-- <div class="testimonials">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Real Words from <span class="pink">Real People</span></div>

            <div class="testimonials_wrapper">
                <div class="col-sm-4">
                    <div class="attestant_box">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
                        </div>
                        <div class="profile">
                            <div class="img_box">
                                <img src="{{ asset('front/images/attestant-1.png') }}">
                            </div>
                            <div class="title">Lorem ipsum</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="attestant_box">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                        </div>
                        <div class="profile">
                            <div class="img_box">
                                <img src="{{ asset('front/images/attestant-2.png') }}">
                            </div>
                            <div class="title">Lorem ipsum</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="attestant_box">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis </p>
                        </div>
                        <div class="profile">
                            <div class="img_box">
                                <img src="{{ asset('front/images/attestant-3.png') }}">
                            </div>
                            <div class="title">Lorem ipsum</div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>

        </div>
    </div>
</div> -->

<div class="built_by_best">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-5">
                <div class="text_box">
                    <div class="heading">Masters Of <span class="pink">Minting </span> </div>
                    <p>Nothing works like experience. MINTIT harnesses the collective brilliance of technology and financial experts to demystify the complexity of investing, just for you. Leverage this wealth of experience from seasoned professionals, drawn from key domains, to your own advantage.</p>
                    <a href="{{ url('about-us') }}" class="filled_purple_btn">Get To Know Us</a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="img_box">
                    <img src="{{ asset('front/images/masters-of-minting.png') }}" alt="Masters Of Minting - MINTIT" title="Masters Of Minting - MINTIT">
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- built_by_best end -->

<div class="blogs">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-6">
                <div class="video_box">
                    <a href="#">
                        <img src="{{ asset('front/images/blogs.png') }}" alt="Blogs - MINTIT" title="Blogs - MINTIT"> 
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text_box">
                    <div class="heading">Blogs,<br> In your  <span class="pink">Interest</span></div>
                    <a href="{{ url('blogs') }}" class="filled_purple_btn">Start Reading</a>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- blogs end -->

<div class="mintit_youtube">
    <div class="container">
        <div class="heading center">From Complexity <span class="pink">to Simplicity</span></div>
        <div class="inner_container">
            
            <div class="col-sm-6">
                <div class="text_box">
                    <div class="heading">MINTIT <span class="pink">YouTube</span></div>
                    <p>Unlock the world of investing with our easy-to-follow YouTube videos. Simplify Investing and help your money grow.</p>
                    <a href="https://www.youtube.com/@mintitapp" target="_blank" class="filled_purple_btn">Get To Know Us</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="video_box">
                    <a href="https://www.youtube.com/@mintitapp" target="_blank">
                        <img src="{{ asset('front/images/mintit-youtube.jpg') }}" alt="MINTIT YouTube - MINTIT" title="MINTIT YouTube - MINTIT">
                    </a>
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- mintit_youtube end -->

<!-- <div class="upgrade_finances">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading center">Upgrade Your Finances,<br> The <span class="pink">Smarter Way</span> </div>
            <div class="info_boxes">
                <div class="col-sm-6">
                    <div class="img_box">
                        <img src="{{ asset('front/images/upgrade-your-finances.jpg') }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text_box">
                        <div class="title">MINTIT Academy</div>
                        <p>Why trust others when you can be an expert yourself? It remains rocket science only until you get enlightened. Explore MINTIT Academy and sharpen your financial acumen.</p>
                        <a href="#" class="filled_purple_btn">Start Learning</a>
                    </div>
                </div>
                <div class="clr"></div>
            </div>

        </div>
    </div>
</div> -->
<!-- upgrade_finances end -->

<div class="why_wait">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-7">
                <!-- <div class="slider_wrapper">
                    <div class="why_wait_slider owl-carousel owl-theme">
                        <div class="item_box">
                            <img src="{{ asset('front/images/why-wait.jpg') }}">
                        </div>
                        <div class="item_box">
                            <img src="{{ asset('front/images/why-wait.jpg') }}">
                        </div>
                        <div class="item_box">
                            <img src="{{ asset('front/images/why-wait.jpg') }}">
                        </div>
                    </div>
                </div> -->
                <div class="video_box_wrapper">
                    <div class="video_box">
                        <!-- <video muted autoplay loop>
                            <source src="{{ asset('front/videos/mobile-scroll.mp4') }}" type="video/mp4">
                        </video> -->
                        <img src="{{ asset('front/images/mobile-scroll.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="text_box">
                    <div class="heading">Why Wait? <span class="pink">Start Investing Today!</span></div>
                    <!--<a href="#" class="filled_purple_btn request_callback">Download App <i class="fas fa-download"></i></a>-->
                </div>
            </div>
            <div class="clr"></div>

        </div>
    </div>
</div>
<!-- why_wait end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js" ></script>
<script src="{{ asset('front/js/SplitText3.js') }}" ></script>

<script>
// https://www.fisdom.com/
/* eslint-disable template-curly-spacing */
/* eslint-disable array-bracket-spacing */
/* eslint-disable space-in-parens */
// For more information, see greensock.com/docs/v3/Plugins/ScrollTrigger
window.gsap.registerPlugin(window.ScrollTrigger);
window.gsap.registerPlugin(window.SplitText);

// Animation for homepage product cards
if (window.innerWidth > 990 ) {
    const defaultPositon = {
        x: 0,
        y: 0,
        scale: 1,
        rotate: 0,
    };

    window.gsap
        .timeline({
            scrollTrigger: {
                trigger: '.investment_plan',
                start: '0% 10%',
                end: '+=600px 15%',
                scrub: 0.6,
                // markers: true,
            },
        })
        .fromTo(
            '.info_box_1',
            {
                ...defaultPositon,
            },
            {
                x: 390,
                y: 500,
                scale: 0.1,
                rotate: -10,
                ease: 'power2.out',
                delay: 0.1,
            },
            'start',
        )
        .fromTo(
            '.info_box_2',
            {
                ...defaultPositon,
            },
            {
                x: 0,
                y: 500,
                scale: 0.1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.3,
            },
            'start',
        )
        .fromTo(
            '.info_box_3',
            {
                ...defaultPositon,
            },
            {
                x: -390,
                y: 500,
                scale: 0.1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.2,
            },
            'start',
        )
        .fromTo(
            '.info_box_4',
            {
                ...defaultPositon,
            },
            {
                x: -440,
                y: 380,
                scale: 0.1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.38,
            },
            'start',
        )
        .fromTo(
            '.triangle_1',
            {
                ...defaultPositon,
            },
            {
                x: 0,
                y: 50,
                scale: 1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.2,
            },
            'start',
        )
        .fromTo(
            '.triangle_2',
            {
                ...defaultPositon,
            },
            {
                x: 50,
                y: 0,
                scale: 1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.2,
                duration: 0.5,
            },
            'start',
            // 'alternate', // Set animation-direction to 'alternate' for back and forth
        )
        .fromTo(
            '.triangle_3',
            {
                ...defaultPositon,
            },
            {
                x: -50,
                y: 0,
                scale: 1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.2,
            },
            'start',
        )
        .fromTo(
            '.triangle_4',
            {
                ...defaultPositon,
            },
            {
                x: 0,
                y: -50,
                scale: 1,
                rotate: 0,
                ease: 'power2.out',
                delay: 0.2,
            },
            'start',
        );
}
</script>

@endsection