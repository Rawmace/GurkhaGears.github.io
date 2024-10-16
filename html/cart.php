<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!---jquery themes-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/cc3cdcd96a.js"
      crossorigin="anonymous"
    ></script>

  <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/about.css" />

    <title>Gurkha-Gears</title>
  </head>
    


  <body>
  <section id="header">
      <a href=""
        ><img src="../images/fogo.png" class="logo" alt="logo of the company"
      /></a>
      <div>
        <ul id="navbar">
          <li><a href="welcome.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>

          <li>
            <a class="active" href= "cart.php">
              <i class="fa-solid fa-cart-shopping"></i> MY CART</a
            >
          </li>
       <!-- retrives the username from the database  -->
            <?php
            session_start();
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                // User is logged in, display their username
                
                echo '<li> <i class="fas fa-user"></i>        
                <a href="../php/account.php">' . $_SESSION["username"] . '</a></li>';
              
            }
            ?>
          
        </ul>
      </div>
    </section>
  
    <pre>



      <h1> (Bandai XA NEpal ) updating the cart soon.Thanks </h1>
   
    </pre>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>

      <div class="form">
        <input
          type="email"
          id="emailInput "
          placeholder=" Your email address"
        />
        <button class="normal">Sign Up</button>
      </div>
    </section>
    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="../images/fogo.png" alt="logo" />
        <h3>Contact</h3>
        <p>
          <strong>Address:</strong> Swyambhu Circle Road,Kathmandu 44600,Nepal
        </p>
        <p><strong>Phone:</strong> +977 986-922 4554</p>
        <p><strong>Hours:</strong> 9:00 - 18:00, Sun - Sat</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <a href="https://www.facebook.com/GurkhaGears" target="_blank"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="https://www.instagram.com/gurkha_gears/" target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="https://www.tiktok.com/@gurkha_gears" target="_blank"
              ><i class="fab fa-tiktok"></i
            ></a>
            <a
              href="https://www.youtube.com/channel/UC2JZBrN7HoGnQbgpkNwB0ag"
              target="_blank"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="https://www.pinterest.com/gurkha_gears/" target="_blank"
              ><i class="fab fa-pinterest"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="about.php">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="contact.php">Contact Us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="login.html">Sign In</a>
        <a href="cart.php">View Cart</a>
        <a href="cart.php">My Wishlist</a>
        <a href="cart.php">Track My Order</a>
        <a href="contact.php">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>from App Store or Google play</p>
        <div class="row">
          <a href="https://www.apple.com/ca/app-store/" target="_blank">
            <img src="../images/app.jpg" alt="appstore" />
          </a>
          <a
            href="https://play.google.com/store/games?hl=en&gl=US"
            target="_blank"
          >
            <img src="../images/play.png" alt="playstore" />
          </a>
        </div>
        <p>Secured Payment Gateways</p>
      </div>

      <div class="copyright">
        <p>&copy; 2024 Gurkha Gears. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
