$(document).ready(function () {
  $("#login-form").validate({
    rules: {
      username_or_email: {
        required: true,
        minlength: 6,
      },
      password: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      username_or_email: {
        required: "Please enter the username or email",
        minlength: "Username or email must be at least 6 characters long.",
      },
      password: {
        required: "Please enter the password",
        minlength: "Password must be at least 8 characters long.",
      },
    },
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    submitHandler: function (form) {
      form.submit();
    },
  });
});
