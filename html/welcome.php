<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/cc3cdcd96a.js"
      crossorigin="anonymous"
    ></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <!-- Include Slick JavaScript -->
    <script src="../slick/slick.min.js"></script>
    <title>GURKHA GEARS</title>
  </head>
  <body>
    <section id="header">
      <a href="welcome.php"
        ><img src="../images/fogo.png" class="logo" alt="logo of the company"
      /></a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="welcome.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>

          <li>
            <a href="cart.html">
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
    <section class="user">
      <?php
      echo '<h1>Welcome,' . $_SESSION["username"] .'</h1>';
      ?>
      <style>
        .user h1{
          margin:15px 98% 15px 5px;
          border-bottom:5px solid green;
        }
        .user h1:hover{
          margin:15px 85% 15px 5px;
          border-bottom:5px solid green;
          padding:5px;
          
         
          box-shadow: 0 0 10px black; 
        }
        </style>
    </section>


    <section id="hero">
      <h3>SHOP THE LEGACY</h3>
      <br />

      <h4>UPTO 70% OFF On All Products</h4>
      <br />

      <button onclick="window.location.href='products.php';">Shop Now</button>
    </section>





<section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="../images/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>

      <div class="fe-box">
        <img src="../images/f2.png" alt="" />
        <h6>Order Online</h6>
      </div>

      <div class="fe-box">
        <img src="../images/f3.png" alt="" />
        <h6>Affordability</h6>
      </div>

      <div class="fe-box">
        <img src="../images/f4.png" alt="" />
        <h6>Festive Bumper Offers</h6>
      </div>

      <div class="fe-box">
        <img src="../images/f5.png" alt="" />
        <h6>Promotions</h6>
      </div>

      <div class="fe-box">
        <img src="../images/f6.png" alt="" />
        <h6>F24/7 Support</h6>
      </div>
    </section>

    <script>
      $(document).ready(function () {
        $(".lazy").slick({
          lazyLoad: "ondemand",
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true, // Enable autoplay
          autoplaySpeed: 1000, // Set autoplay speed in milliseconds (e.g., 2000 for 2 seconds)
        });
      });
    </script>
    <!-- ---use of plugin for autoplay of images  -->
    <h3 class="feature-title">Featured Images</h3>

    <div class="lazy">
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/878358/pexels-photo-878358.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="men-jeans jacket"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/8989588/pexels-photo-8989588.jpeg?auto=compress&cs=tinysrgb&w=6001"
          alt="women Jump suits"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/7764018/pexels-photo-7764018.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="GUrkha shorts"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/1760900/pexels-photo-1760900.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="GUrkha shorts"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/17917177/pexels-photo-17917177/free-photo-of-model-in-white-t-shirt-and-sangria-shorts-standing-next-to-model-in-pink-sportswear.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="couple wear"
        />
      </div>

      <div>
        <img
          data-lazy="https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="kurta-women"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/5325599/pexels-photo-5325599.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="zara jeans women"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/4353614/pexels-photo-4353614.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="gurkha sweatshirt"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/3290886/pexels-photo-3290886.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="gurkha sweatshirt"
        />
      </div>

      <div>
        <img
          data-lazy="https://images.pexels.com/photos/20700962/pexels-photo-20700962/free-photo-of-man-in-black-suit-and-woman-in-cap.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="girl-frock"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="girl-frock"
        />
      </div>
      <div>
        <img
          data-lazy="https://images.pexels.com/photos/19254457/pexels-photo-19254457/free-photo-of-elegant-embracing-couple.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="couple wear"
        />
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
        <a href="html/login.html">Sign In</a>
        <a href="html/cart.php">View Cart</a>
        <a href="html/cart.php">My Wishlist</a>
        <a href="html/cart.php">Track My Order</a>
        <a href="html/contact.html">Help</a>
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
