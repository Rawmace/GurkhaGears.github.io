<?php
session_start();

// Check if the user is not logged in, redirect them to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../html/login.html");
    exit;
}

// Include your database connection file
include_once "db_connection.php"; // Adjust the file path as needed

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user details from the database
$username = $_SESSION["username"]; // Assuming username is stored in the session
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

// Check if the query executed successfully
if ($result) {
    $row = mysqli_fetch_assoc($result);
    // Extract user details
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $dob = $row["dob"];
   
    $address = $row["address"];
    $postal = $row["postal"];
    $phone = $row["phone"];
    $email = $row["email"];
    // Add more fields as needed
} else {
    echo "Error: " . mysqli_error($conn);
}

// Handle form submission for updating user details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract updated details from the form
    $newFirstname = $_POST["firstname"];
    $newLastname = $_POST["lastname"];
    $newDob = $_POST["dob"];
    
    $newAddress = $_POST["address"];
    $newPostal = $_POST["postal"];
    $newPhone = $_POST["phone"];
    $newEmail = $_POST["email"];
    // Add more fields as needed

    // Update the user's details in the database
    $updateSql = "UPDATE users SET 
        firstname = '$newFirstname',
        lastname = '$newLastname',
        dob = '$newDob',
        
        address = '$newAddress',
        postal = '$newPostal',
        phone = '$newPhone',
        email = '$newEmail'
        WHERE username = '$username'";
    if (mysqli_query($conn, $updateSql)) {
      echo '<div class="success-message">!!Note: User details updated successfully.!!</div>';
              // Refresh the page to reflect changes
        header("Refresh:0.9");
    } else {
      echo '<div class="error-message">Error updating record: ' . mysqli_error($conn) . '</div>';
    }
}

// Close database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/account.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>GURKHA GEARS</title>
    <script
      src="https://kit.fontawesome.com/cc3cdcd96a.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section id="header">
      <a href="../html/welcome.php"
        ><img src="../images/fogo.png" class="logo" alt="logo of the company"
      /></a>
      <div>
        <ul id="navbar">
          <li>
            <a href="../html/cart.php">
              <i class="fa-solid fa-cart-shopping"></i> Your CART</a
            >
          </li>
          <li>
            <a class="active" href="account.php">
              <i class="fa fa-user-circle-o account-logo-icon"></i>
              YOUR INFO
              <div class="account"></div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    
    <section>
<h1>Welcome, <?php echo $firstname; ?></h1>
<h2> Hey <?php echo $firstname; ?> ,You can update your account info and click on save changes to confirm </h2>
<div class="form">
    <form action="" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>"><br>
        <label for="dob">Date Of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br>
        <label for="postal">Postal Code:</label>
        <input type="text" id="postal" name="postal" value="<?php echo $postal; ?>" required><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
        <input type="submit" value="Save Changes">
    </form>
</div>
<div class="button">
    <button type="button" id="button" onclick="myFunction()">Log out</button>
</div>

<!-- JavaScript function for logging out -->
<script>
    function myFunction() {
        window.location.href = "../html/login.html"; // Redirect to login.html
    }
</script>
