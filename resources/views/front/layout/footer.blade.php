<footer>
    <div class="upper_sec">
        <div class="container">
            <div class="inner_container">
                
                <div class="footer_box">
                    <div class="logo">
                        <a href="./">
                            <img src="{{ asset('front/images/logo.png') }}">
                        </a>
                    </div>
                    <div class="info_txt">Orbit Eye Hospital delivers expert, compassionate eye care for all ages, using advanced technology and experienced specialists. Discover our full range of services and schedule your appointment for clear, healthy vision today.</div>
                </div>
                <div class="footer_box">
                    <div class="title">quick links</div>
                    <ul class="quick_links">
                        <li>Services</li>
                        <li>About Us</li>
                        <li>Contact</li>
                        <li>Team</li>
                        <li><a href="{{ route('blog-and-resources') }}">Blog and Resources</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ route('eye-diseases') }}">Eye Diseases</a></li>
                        <li><a href="{{ route('faqs') }}">Faqs</a></li>
                        <li><a href="{{ route('info') }}">Info</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('surgeries') }}">Surgeries</a></li>
                        <li><a href="{{ route('team') }}">Team</a></li>
                        <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
                <div class="footer_box">
                    <div class="subscribe_wrapper">
                        <p>Stay updated on new projects and offers </p>
                        <div class="subscribe_input_wrapper">
                            <input type="text" name="email" placeholder="Email Id">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </div>
                    <ul class="social_links">
                        <li><a href="#"><img src="{{ asset('front/images/icons/instagram.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('front/images/icons/facebook.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('front/images/icons/twitter.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('front/images/icons/youtube.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('front/images/icons/linkedin.png') }}"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="lower_sec"></div>
</footer>

</div>
<!-- main -->



<!--sticky header-->
<!-- <script src="js/classie.js"></script>
<script>
function init() {
window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 50,
  header = document.querySelector("header");
  if (distanceY > shrinkOn) {
  classie.add(header,"smaller");
  } else {
  if (classie.has(header,"smaller")) {
    classie.remove(header,"smaller");
  }
  }
});
}
window.onload = init();
</script> -->
<script src="{{ asset('front/js/common.js') }}"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>


<script src="{{ asset('front/js/ace-responsive-menu.js') }}"></script>
<script>
$(document).ready(function () {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query       
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
});
</script>

<script src="{{ asset('front/plugins/venobox/venobox.min.js') }}"></script>
<script>
$(document).ready(function(){
    new VenoBox({
        selector: '.new_veno',
        // numeration: true,
        // infinigall: true,
        // share: true,
        // spinner: 'rotating-plane'
    });
});
</script>

<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script>
new WOW().init();
</script>

<!--slider-->
<script src="{{ asset('front/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('front/plugins/owl-carousel/owl-content-animation.js') }}"></script>

</body>
</html>
