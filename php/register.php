<?php

// Define database connection variables
$servername = "localhost";
$username = "Gurkha";
$password = "Gurkha";
$dbname = "Gurkha_Gears";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize it
  $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
  $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
  $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);
  $postal = mysqli_real_escape_string($conn, $_POST["postal"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]); // Added email field
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]); // Fixed password variable name

  // Hash the password using bcrypt
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  
  // Prepare the SQL query to insert the data into the database
  $sql = "INSERT INTO users (firstname, lastname, dob, gender, address, postal, phone, email, username, password)
          VALUES ('$firstname', '$lastname', '$dob', '$gender', '$address', '$postal', '$phone', '$email', '$username', '$hashed_password')"; // Fixed SQL query
  
  // Execute the query and check for errors
  if (mysqli_query($conn, $sql)) {
    echo "Thanks For Registering. Welcome, $firstname";
    // Redirect to the landing page
    header("Location: ../html/welcome.php");
    exit(); // Terminate script execution after redirect
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);

?>
