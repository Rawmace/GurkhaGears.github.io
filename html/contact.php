<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script src="../js/contact.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/contact.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/cc3cdcd96a.js"
      crossorigin="anonymous"
    ></script>
    <title>Gurkha contact</title>
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
          <li><a class="active" href="contact.php">Contact</a></li>

          <li>
            <a href="cart.php">
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

  
    <section id="contact-form" class="section-p1">
      <div class="form-container">
        <h2>Contact Us</h2>
        <form id="contact-us-form" action="../php/contact.php" method="post">
          <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" id="name" name="name" minlength="6" placeholder="Enter your full Name" required />
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>

          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone"  />
          </div>

          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" />
          </div>

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>

          <button type="button" onclick="validateForm()">Submit</button>
        </form>
      </div>
    </section>

    <section id="page-header" class="contact-header">
      <p>LEAVE A MESSAGE. We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our location or contact us today</h2>
        <h3>Head Office</h3>
        <div>
          <li>
            <i class="fa-solid fa-map-location-dot"></i>
            <p>Swyambhu Circle Road,Kathmandu 44600,Nepal</p>
          </li>

          <li>
            <i class="fa-solid fa-envelope"></i>
            <p>Gurkhagears@gmail.com</p>
          </li>

          <li>
            <i class="fa-solid fa-phone"></i>
            <p>+977 986-922 4554</p>
          </li>

          <li>
            <i class="fa-solid fa-clock"></i>
            <p>Sunday to Saturday 09:00 - 18:00</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4330.88679168996!2d85.28371639003586!3d27.7154387114692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d79df27487%3A0x2c3c044b55c93905!2sGurkha%20Warriors%20Training%20Center%20pvt.ltd!5e0!3m2!1sen!2sca!4v1711066897376!5m2!1sen!2sca" 
          width="600"
          height="450"
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>"
          
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>

      <div class="form">
        <input type="text" placeholder=" Your email address" />
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
            <a href="https://www.youtube.com/channel/UC2JZBrN7HoGnQbgpkNwB0ag" target="_blank"
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
  </body>
</html>
