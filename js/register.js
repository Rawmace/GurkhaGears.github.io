//validation using jquery
$(document).ready(function () {
  $("#registration-form").validate({
    rules: {
      firstname: "required",
      dob: "required",
      gender: "required",
      address: "required",
      postal: "required",
      phone: {
        required: true,
        minlength: 10,
      },
      email: {
        required: true,
        email: true,
      },
      username: {
        required: true,
        minlength: 6,
        maxlength: 60,
      },
      password: {
        required: true,
        minlength: 8,
      },
      confirmPassword: {
        required: true,
        equalTo: "#password",
      },
    },
    messages: {
      firstname: "Please enter your first name",
      dob: "Please enter your date of birth",
      gender: "Please select your gender",
      address: "Please enter your address",
      postal: "Please enter your postal code",
      phone: {
        required: "Please enter your phone number",
        minlength: "Phone number must be at least 10 characters long",
      },
      email: "Please enter a valid email address",
      username: {
        required: "Please enter a username",
        minlength: "Username must be at least 6 characters long",
        maxlength: "Username cannot be more than 60 characters long",
      },
      password: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long",
      },
      confirmPassword: {
        required: "Please confirm your password",
        equalTo: "Passwords do not match",
      },
    },
    errorElement: "div",
    errorPlacement: function (error, element) {
      // Custom error placement (optional)
      error.insertAfter(element);
    },
    submitHandler: function (form) {
      // Form submission logic (optional)
      form.submit();
    },
  });
});
