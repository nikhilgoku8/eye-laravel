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

<div class="body_overlay">
    <div class="inner_box">
        <div class="request_overlay_box">
            <div class="form_wrapper">
                <div class="heading">Book Appointment</div>
                @include('front.includes.appointment-form')
            </div>
             <a class="close_overlay"></a>
        </div>
    </div>
</div>

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


<script type="text/javascript">
$(document).ready(function() {

    // Trigger search after 3 letters
    $('[name=otp]').on('keyup', function() {
        let query = $(this).val().trim();
        $submit_btn = $('button[type=submit]');

        if (query.length == 6) {
            $submit_btn.prop('disabled',false);
        } else {
            $submit_btn.prop('disabled',true);
        }
        
    });

    $(".request_otp").on('click',(function(e){

        var button = $(this);
        button.attr('disabled', 'disabled');
        button.addClass('spinners');

        $this = $(this).closest('form');
        let _token = $('[name=_token]').val();
        let patient_email = $this.find('[name=patient_email]').val();
        // alert(email);
        // $this = $(this);
        let formData = new FormData()
        formData.append('_token', _token);
        formData.append('patient_email', patient_email);

        e.preventDefault();
        $this.find(".form_error").html("");
        $this.find(".form_error").removeClass("alert alert-danger");

        $.ajax({
            type: "POST",
            url: "{{ route('sendOtpViaEmail') }}",
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                button.removeClass('spinners');
                $this.find(".form-error-request_otp").html('OTP Sent On Email');

                // Countdown start
                var countdown = 120;

                // Update button text and countdown every second
                var countdownInterval = setInterval(function() {
                    button.text(countdown + 's');
                    countdown--;

                    // When countdown reaches 0, enable the button again and reset text
                    if (countdown < 0) {
                        clearInterval(countdownInterval);
                        button.prop('disabled', false).text('Resend OTP');
                    }
                }, 1000); // Run every 1000ms (1 second)

            },
            error: function(data){
                if (data.status === 422) {
                    let errors = data.responseJSON.errors;
                    let allErrors = '';
                    $.each(errors, function (key, val) {
                        var fieldName = key.replace(/\./g, '-');
                        // $('#form-error-' + key).html(message).addClass('alert alert-danger');
                        allErrors += val + '<br>';
                        $this.find(".form-error-"+fieldName).html(val).addClass('alert alert-danger');
                        // $this.find(".form-error-"+fieldName).addClass('alert alert-danger');
                    });
                    $this.find(".all_errors").html(allErrors).addClass('alert alert-danger');
                } else if (data.status === 419) {
                    alert("Error - "+419);
                    console.log(data.responseJSON.message);
                } else if (data.status === 401) {
                    alert("Please log in.");
                    // window.location.href = "/login";
                } else if (data.status === 403) {
                    alert("You don’t have permission.");
                } else if (data.status === 404) {
                    alert("The resource was not found.");
                } else if (data.status === 500) {
                    alert("Something went wrong on the server.");
                    console.log(data.console_message);
                } else {
                    alert("Unexpected error: " + data.status);
                    console.log(data);
                }

                button.prop('disabled', false).removeClass('spinners');
            }
        });

    }));

    $(".appointment_form").on('submit',(function(e){
        $this = $(this);
        e.preventDefault();
        $(".form_error").html("");
        $(".form_error").removeClass("alert alert-danger");

        $.ajax({
            type: "POST",
            url: "{{ route('appointment.store') }}",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                location.href="{{ route('appointment.thank-you') }}";
            },
            error: function(data){
                if (data.status === 422) {
                    let errors = data.responseJSON.errors;
                    $.each(errors, function (key, message) {
                        var fieldName = key.replace(/\./g, '-');
                        $this.find(".form-error-"+fieldName).html(message);
                        $this.find(".form-error-"+fieldName).addClass('alert alert-danger');
                        // $('#form-error-' + key).html(message).addClass('alert alert-danger');
                    });
                } else if (data.status === 401) {
                    alert("Please log in.");
                    // window.location.href = "/login";
                } else if (data.status === 403) {
                    alert("You don’t have permission.");
                } else if (data.status === 404) {
                    alert("The resource was not found.");
                } else if (data.status === 500) {
                    alert("Something went wrong on the server.");
                    console.log(data.console_message);
                } else {
                    alert("Unexpected error: " + data.status);
                    console.log(data);
                }
            }
        });

    }));


    $(".specialization_id").on('change', function(){

        $this = $(this);        
        var specialization_id = $(this).val();        

        $.ajax({
            type: "POST",
            url: "{{ route('get-doctor-by-specialization') }}",
            data: {"_token":"{{ csrf_token() }}", "specialization_id":specialization_id},
            dataType: 'json',
            success: function(result) {
                // console.log(result);
                $doctor = $this.closest('form').find(".doctor_id");
                $doctor.find("option").remove();
                $doctor.append('<option value="">Select Doctor</option>');
                jQuery.each( result, function( i, val ) {                    
                    $doctor.append('<option value="'+val['id']+'">'+val['name']+'</option>');
                });
            },
            error: function(data){
                
            }
        });

    });

    // Event listener for changes in both start and end input fields
    $('[name=doctor_id], [name=appointment_date]').on('change', function() {
        updateTimeSlots();
    });

    function updateTimeSlots() {

        const appointment_date = $('[name=appointment_date]').val();
        const doctor_id = $('[name=doctor_id]').val();

        $.ajax({
            type: "POST",
            url: "{{ route('get-time-slots') }}",
            data: {"_token":"{{ csrf_token() }}", "doctor_id":doctor_id, "appointment_date":appointment_date},
            dataType: 'json',
            success: function(result) {
                console.log(result.slots);
                $timeSlot = $("[name=slot_id]");
                $timeSlot.find("option").remove();
                $timeSlot.append('<option value="">Select Time Slot</option>');
                if (result.slots.length === 0) {
                    $timeSlot.append('<option value="">No slots available select another date/doctor</option>');
                    return; // Stop here, do NOT run the loop
                }else{
                    jQuery.each( result.slots, function( i, val ) {
                        $timeSlot.append('<option value="'+val['id']+'" ' + (val['is_booked'] ? 'disabled' : '') + '>'+val['start_time']+' - '+val['end_time'] + (val['is_booked'] ? ' - Booked' : '') +'</option>');
                    });
                }
            },
            error: function(data){
                // if (data.status === 422) {
                //     let errors = data.responseJSON.errors;
                //     $.each(errors, function (key, message) {
                //         var fieldName = key.replace(/\./g, '-');
                //         $(".form-error-"+fieldName).html(message);
                //         $(".form-error-"+fieldName).addClass('alert alert-danger');
                //         // $('#form-error-' + key).html(message).addClass('alert alert-danger');
                //     });
                // } else if (data.status === 401) {
                //     alert("Please log in.");
                //     // window.location.href = "/login";
                // } else if (data.status === 403) {
                //     alert("You don’t have permission.");
                // } else if (data.status === 404) {
                //     alert("The resource was not found.");
                // } else if (data.status === 500) {
                //     alert("Something went wrong on the server.");
                //     console.log(data.console_message);
                // } else {
                //     alert("Unexpected error: " + data.status);
                //     console.log(data);
                // }
            }
        });

    }

});
</script>

<script src="{{ asset('front/js/common.js') }}"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>


<script src="{{ asset('front/js/ace-responsive-menu.js') }}"></script>
<script>
$(document).ready(function () {

    $(".request_callback").on('click', function(){
        $(".body_overlay").fadeIn();
    });
    $(".close_overlay").on('click', function(){
        $(".body_overlay").fadeOut();
    });
    $(".body_overlay").on('click', function(event){
        if (!$(event.target).closest('.request_overlay_box').length) {
            $(".body_overlay").fadeOut();
        }
    });

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


<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<!--Start calender -->
<script src="{{ asset('admin/assets/js/bootstrap-datetimepicker.js') }}"></script>
<script type="text/javascript">

    $('.future_datepicker').datetimepicker({
        startDate: new Date(),
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        format: 'yyyy-mm-dd'
    });
  
</script>
<!-- End calender -->

</body>
</html>
