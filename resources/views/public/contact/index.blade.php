@extends('layouts.app')

@section('title',"Contact Us")

@section('content')

<div class="page-section">

    <div class="container">

        <div id="success-message" class="alert alert-success wow fadeInUp" style="display: none;">
            Your request has been submitted successfully.
        </div>


        <h1 class="text-center wow fadeInUp">Get in Touch</h1>

        <form method="post" action="{{route('contact.save')}}" class="contact-form mt-5 needs-validation" novalidate>
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <label for="fullName">Name <span style="color:red"> * <span></label>
                    <input type="text" id="fullName" name="full_name" class="form-control" required value="{{old('full_name')}}" placeholder="Full name..">
                    <div class="invalid-feedback">
                        Please enter full name.
                    </div>
                </div>

                <div class="col-sm-6 py-2 wow fadeInRight">
                    <label for="emailAddress">Email <span style="color:red"> * <span></label>
                    <input type="email" id="emailAddress" name="email" required class="form-control" value="{{old('email')}}" placeholder="Email address..">
                    <div class="invalid-feedback">
                        Please enter valid email.
                    </div>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="subject">Phone Number <span style="color:red"> * <span> </label>
                    <input type="text" id="phone" required class="form-control" name="phoneno" value="{{old('phoneno')}}" placeholder="Enter phone number..">
                    <div class="invalid-feedback" id="phone_error">
                        Please enter phone number.
                    </div>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="subject">Subject <span style="color:red"> * <span> </label>
                    <input type="text" id="subject" required class="form-control" name="subject" value="{{old('subject')}}" placeholder="Enter subject..">
                    <div class="invalid-feedback" id="subjecr_error">
                        Please enter subject.
                    </div>
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="message">Message <span style="color:red"> * <span> </label>
                    <textarea id="message" required class="form-control" rows="8" name="message" placeholder="Enter Message..">{{old('message')}}</textarea>
                    <div class="invalid-feedback" id="message_error">
                        Please enter message.
                    </div>
                </div>
                <div class="col-4 py-2 wow fadeInUp">
                    <div class="form-group captcha" style="float: left; position: relative;">
                        <span>{!! captcha_img('flat') !!}</span>
                        <a href="javascript:void(0)" id="refresh" style="top: 16px; position: absolute; right: -28px; z-index: 2;"><i class="fas fa-sync-alt"></i></a>
                    </div>
                    <input type="text" class="form-control" value="{{ old('captcha') }}" name="captcha" id="captcha" placeholder="Enter Captcha *" value="{{ old('captcha') }}" required>

                    <div class="invalid-feedback" id="captcha_error">
                        Please enter correct captcha value.
                    </div>

                </div>


            </div>
            <button type="submit" id="submitForm" class="btn btn-primary wow zoomIn">Send Message</button>
        </form>
    </div>
</div>

<div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
</div>


<!-- Include jQuery library for easier AJAX handling -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#refresh').click(function() {

            $.ajax({
                type: 'GET',
                url: "{{ url('refreshcaptcha') }}",
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('form.contact-form').submit(function(e) {
            e.preventDefault();

            var form = $(this);

            if (form[0].checkValidity()) {

                document.getElementById("submitForm").disabled = true;

                // If the form is valid, proceed with the AJAX request
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        if (response.success) {
                            // Clear the form values
                            form[0].reset();

                            // Remove Bootstrap's 'was-validated' class to reset validation feedback
                            form.removeClass('was-validated');
                            document.getElementById("submitForm").disabled = false;

                            // Display the success message
                            var successMessage = $('#success-message');
                            successMessage.show();

                            // Hide the success message after 10 seconds
                            setTimeout(function() {
                                successMessage.fadeOut('slow', function() {
                                    successMessage.hide();
                                });
                            }, 10000);
                            // Scroll to the top of the form
                            // Scroll to the top of the page
                            $('html, body').animate({
                                scrollTop: 0
                            }, 'slow');
                            $("#refresh").trigger('click');

                        }
                    },
                    error: function(response) {

                        $("#refresh").trigger('click');

                        //name=captcha value empty
                        $("#captcha").val('');

                        $.each(response.responseJSON.errors, function(key, val) {
                            key = key.replaceAll(".", "");
                            $("#" + key + '_error').show();
                        });
                        document.getElementById("submitForm").disabled = false;

                    }
                });
            } else {
                // If the form is not valid, trigger Bootstrap's native validation
                form.addClass('was-validated');
            }
        });
    });
</script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection