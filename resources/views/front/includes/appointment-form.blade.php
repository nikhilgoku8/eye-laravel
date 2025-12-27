<form class="appointment_form" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-patient_name"></div>
            <input type="text" name="patient_name" placeholder="Patient Name">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-patient_phone"></div>
            <input type="text" name="patient_phone" placeholder="Phone">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-patient_email"></div>
            <input type="text" name="patient_email" placeholder="Email">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="input_box">
            <div class="error form_error form-error-request_otp"></div>
            <button type="button" class="purple_hollow_btn full_width square request_otp">Request Email OTP</button>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="input_box">
            <div class="error form_error form-error-otp"></div>
            <input type="text" name="otp" placeholder="Email OTP" autocomplete="one-time-code">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-specialization_id"></div>
            <select name="specialization_id" class="specialization_id">
                <option value="">Select Service</option>
                @foreach($specializations as $row)
                    <option value="{{$row->id}}">{{$row->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-doctor_id"></div>
            <select name="doctor_id" class="doctor_id">
                <option value="">Select Doctor</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input_box">
            <div class="error form_error form-error-appointment_date"></div>
            <input type="text" name="appointment_date" placeholder="Appointment Date" class="future_datepicker">
        </div>
    </div>
    <div class="col-sm-6 slot_box">
        <div class="input_box">
            <div class="error form_error form-error-slot_id"></div>
            <select name="slot_id">
                <option value="">Select Time Slot</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12 textarea_box">
        <div class="input_box">
            <div class="error form_error form-error-patient_message"></div>
            <textarea name="patient_message" placeholder="Message"></textarea>
        </div>
    </div>
    <div class="col-sm-12 submit_box">
        <div class="input_box center">
            <div class="error form_error form-error-all_errors all_errors"></div>
            <button type="submit" class="purple_filled_btn" disabled>submit</button>
        </div>
    </div>
    <div class="clr"></div>
</form>
