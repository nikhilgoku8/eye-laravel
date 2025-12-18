<div class="get_in_touch">
    <div class="container">
        <div class="inner_container">
            
            <div class="col-sm-5">
                <div class="left_pane">
                    <div class="title">get in touch <span class="line"></span></div>
                    <ul class="ctc_info">
                        <li>Address : 1st floor, W, Aftab Classic, SV Rd, opp.<br> City Hospital, Raj Nagar, Gautam Nagar, Jogeshwari<br> West, Mumbai, Maharashtra 400102</li>
                        <li>Phone: <a href="#">098201 66630</a> </li>
                        <li>Email: <a href="mailto:contact@orbitshealth.com">contact@orbitshealth.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <div class="form_wrapper">
                    <form id="get_in_touch_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12">
                            <div class="input_box">
                                <div class="error form_error" id="form-error-name"></div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <div class="error form_error" id="form-error-email"></div>
                                <input type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_box">
                                <div class="error form_error" id="form-error-message"></div>
                                <!-- <input type="text" name="name" placeholder="Message"> -->
                                <textarea name="message" placeholder="Message"></textarea>
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

<script type="text/javascript">
$(document).ready(function() {

    $("#get_in_touch_form").on('submit',(function(e){
        e.preventDefault();
        $(".form_error").html("");
        $(".form_error").removeClass("alert alert-danger");

        $.ajax({
            type: "POST",
            url: "{{ route('enquiry.store') }}",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                location.href="{{ route('enquiry.thank-you') }}";
            },
            error: function(data){
                if (data.status === 422) {
                    let errors = data.responseJSON.errors;
                    $.each(errors, function (key, message) {
                        $('#form-error-' + key).html(message).addClass('alert alert-danger');
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

});
</script>