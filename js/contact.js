function validateForm() {
  // Get form inputs
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;

  // Basic validation for name
  if (name.length < 6) {
    alert("Name must be at least 6 characters long.");
    return false;
  }

  // Email validation (basic)
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // You can add more validation rules for other fields here

  // If all validations pass, submit the form
  alert(
    "Your Message has been submitted successfull. We'll contact you shortly.."
  );
  document.getElementById("contact-us-form").submit(); // Submit the form
}
