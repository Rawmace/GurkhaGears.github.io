<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!---jquery themes-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"
    />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/cc3cdcd96a.js"
      crossorigin="anonymous"
    ></script>
    <script src="../js/custom.js"></script>
    <!-- Bootstrap (if not already included) -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- Your custom CSS files -->
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
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>

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
    <div class="container">
      <div id="welcome-message">
        <h1>Welcome to Our Clothing Store!</h1>
        <p>
          At our clothing store, we're passionate about providing the latest
          trends in fashion for all styles and occasions. Whether you're looking
          for casual wear, formal attire, or something in between, we have you
          covered. Our mission is to help you look and feel your best, no matter
          the season or event. We strive to offer high-quality clothing at
          affordable prices, ensuring that everyone can express their unique
          sense of style without breaking the bank. Thank you for choosing us
          for your fashion needs!
        </p>
      </div>
    </div>

    <section id="page-header" class="about-header">
      <h2>WHO WE ARE</h2>

      <section class="main" id="main">
        <div class="image">
          <img
            src="https://cdn.pixabay.com/photo/2016/11/19/15/40/clothes-1839935_1280.jpg"
            alt="Clothing"
          />
        </div>
        <div class="story">
          <h2>Our Story</h2>
          <p>
            Founded by a team of passionate designers and craftsmen, Gurkha
            Gears embodies the spirit of innovation and tradition. Our journey
            began with a vision to create clothing that seamlessly blends
            heritage with contemporary style. Inspired by the legendary Gurkha
            soldiers known for their resilience and bravery, we strive to uphold
            their values in every stitch we make.
          </p>
        </div>

        <div class="mission">
          <h2>Our Mission</h2>
          <p>
            At Gurkha Gears, our mission is simple yet profound: to offer
            premium-quality apparel that not only meets but exceeds the
            expectations of our customers. Each garment is meticulously crafted
            using the finest materials and attention to detail, ensuring
            superior comfort, durability, and style. Beyond creating exceptional
            products, we are committed to fostering a community built on
            integrity, inclusivity, and sustainability. We invite you to join us
            on this journey as we continue to innovate, inspire, and empower.
          </p>
        </div>
      </section>

      <section class="values">
        <h2>Our Values</h2>
        <ul>
          <li>
            <strong>Quality:</strong> We believe in uncompromising quality and
            strive for excellence in every aspect of our work.
          </li>
          <li>
            <strong>Innovation:</strong> We embrace innovation and continuously
            push the boundaries of design and technology to create timeless
            pieces.
          </li>
          <li>
            <strong>Integrity:</strong> We conduct our business with honesty,
            transparency, and integrity, earning the trust and respect of our
            customers.
          </li>
          <li>
            <strong>Community:</strong> We value community engagement and
            actively contribute to causes that enrich the lives of others and
            promote positive change.
          </li>
          <li>
            <strong>Sustainability:</strong> We are committed to minimizing our
            environmental footprint by implementing eco-friendly practices and
            promoting ethical sourcing and manufacturing.
          </li>
        </ul>
      </section>
    </section>

    <!-- ----features section here--- -->

    <section id="feature" class="section-p1">
      <div class="fe-box draggable">
        <img src="../images/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>

      <div class="fe-box draggable">
        <img src="../images/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>

      <div class="fe-box draggable">
        <img src="../images/f3.png" alt="" />
        <h6>Affordability</h6>
      </div>

      <div class="fe-box draggable">
        <img src="../images/f4.png" alt="" />
        <h6>Festive Bumper Offers</h6>
      </div>

      <div class="fe-box draggable">
        <img src="../images/f5.png" alt="" />
        <h6>Promotions</h6>
      </div>

      <div class="fe-box draggable">
        <img src="../images/f6.png" alt="" />
        <h6>F24/7 Support</h6>
      </div>
    </section>

    <!-- ----sortable ---Juery  UI   for the features section-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script>
      $.noConflict();
      jQuery(document).ready(function ($) {
        $("#feature").sortable();
        $(".draggable").draggable({
          connectToSortable: "#feature",
          revert: "invalid",
        });
      });
    </script>

    <!-- ----sortable --- end -->

    <div class="gallery">
      <h3>Gallery</h3>
      <!-- Display images -->
      <div class="row">
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/17474232/pexels-photo-17474232/free-photo-of-man-in-suit-posing-with-women-in-black-dress.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt="Image 1"
          />
        </div>
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/13221661/pexels-photo-13221661.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt="Image 2"
          />
        </div>
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/17661591/pexels-photo-17661591/free-photo-of-models-sitting-on-throne.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt="Image 3"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/20167684/pexels-photo-20167684/free-photo-of-a-woman-in-a-blue-dress-with-a-blue-and-red-pattern.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
            alt=""
          />
          <div id="widget1">
            <img
              src="https://images.pexels.com/photos/3746275/pexels-photo-3746275.jpeg?auto=compress&cs=tinysrgb&w=600"
              alt=""
            />
          </div>
        </div>
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/3746275/pexels-photo-3746275.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt=""
          />
          <div id="widget2"></div>
        </div>
        <div class="col-md-4">
          <img
            src="https://images.pexels.com/photos/7782138/pexels-photo-7782138.jpeg?auto=compress&cs=tinysrgb&w=600"
            alt=""
          />
          <div id="widget3"></div>
        </div>
      </div>
    </div>

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
