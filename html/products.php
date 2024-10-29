<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/products.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../js/product.js"></script>
  <script src="https://kit.fontawesome.com/cc3cdcd96a.js" crossorigin="anonymous"></script>
  <title>Gurkha Gears</title>
  <script>


  </script>
  </head>
  <body>
    <section id="header">
      <a href=""
        ><img src="../images/fogo.png" class="logo" alt="logo of the company"
      /></a>
      <div>
        <ul id="navbar">
          <li><a href="welcome.php">Home</a></li>
          <li><a  class="active" href="products.php">Products</a></li>
          <li><a href="about.php">About</a></li>
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
    

      <!-- proucts male section -->
      <section id="product1" class="section-p1">
      <h2>MEN</h2>
      <h4>FOR ALL AGE GROUPS</h4>

      <div class="pro-container" id="container">
        <!-- list of mens products  -->
        <div class="pro" data-product-name="Blazer men" data-product-price="60">
          <img src="https://images.pexels.com/photos/10320223/pexels-photo-10320223.jpeg?auto=compress&cs=tinysrgb&w=600" alt="men-blazer">
          <div class="des">
            <span><strong>Mens Blazer 2024 </strong> </span>
            <h5>Blazer 2024 Professional - men  </h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$60</h4>
            <h4>Available Quantity: <span class="Quantity">20</span></h4>
          </div>
          <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60, 1)"><i class="fa-solid fa-cart-shopping"></i>(<span class="cartCounter">0</span>)</a>
        </div>
        
        <div class="pro" data-product-name="Summer Outfit" data-product-price="80">
          <img src="https://images.pexels.com/photos/1103828/pexels-photo-1103828.jpeg?auto=compress&cs=tinysrgb&w=600" alt="men sports wear" />
          <div class="des">
            <span><strong>Summer Outfit</strong> </span>
            <h5>Summer sport outwear</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$80</h4>
            <h4>Available Quantity :<span class="Quantity">20</span></h4>
          </div>
          <a href="#" class="addToCart" onclick="addToCart(this)">
            <i class="fa-solid fa-cart-shopping"></i>(<span class="cartCounter">0</span>)
          </a>
        </div>
        
        <div class="pro" data-product-name="shorts men" data-product-price="40">
            <img src="https://images.pexels.com/photos/5325560/pexels-photo-5325560.jpeg?auto=compress&cs=tinysrgb&w=600" alt="GUrkha shorts" />
            <div class="des">
              <span><strong>Gurkha shorts  men</strong></span>
              <h5>trendy summer wears for running and casual</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$40</h4>
              <h4>Available Quantity :<span id="Quantity">10</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)">
              <i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter">0</span>)
            </a>
        </div>
        
        <div class="pro" data-product-name="sweater" data-product-price="50">
            <img src="https://images.pexels.com/photos/5559989/pexels-photo-5559989.jpeg?auto=compress&cs=tinysrgb&w=600" alt="kids-party wear" />
            <div class="des">
              <span><strong>sweaters for young kids </strong></span>
              <h5>Colourful Gurkha suits for kids</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$50</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)" >
              <i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter">0</span>)
            </a>
        </div>
      
        <div class="pro" data-product-name="jeans men" data-product-price="80">
            <img src="https://images.pexels.com/photos/16059703/pexels-photo-16059703/free-photo-of-group-of-young-men-in-casual-outfits-posing-against-blue-background.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="carlo jeans men" />
            <div class="des">
              <span>men stylish JEANS</span>
              <h5>Zara jeans men</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)">
              <i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter">0</span>)
            </a>
        </div>
      
        <div class="pro" data-product-name="oldman outfit" data-product-price="100">
            <img src="https://images.pexels.com/photos/7869678/pexels-photo-7869678.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gurkha formal" />
            <div class="des">
              <span>formal- oldmen</span>
              <h5>Gurkha formals  for old men</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)">
              <i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter">0</span>)
            </a>
        </div>
      
      
        <div class="pro" data-product-name="Gurkha formalwears" data-product-price="80">
                <img src="https://www.shutterstock.com/image-photo/set-different-mens-shoes-types-260nw-255790510.jpg" alt="shoes" />
                <div class="des">
                  <span>trendiest shoes</span>
                  <h5>
                    Gurkha shoes - for all generations
                  </h5>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h4>$180</h4>
                  <h4>Available Quantity :<span id="Quantity">20</span></h4>
               </div>
               <a href="#" class="addToCart" onclick="addToCart(this)">
                <i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter">0</span>)
              </a>
        </div>

        <div class="pro" data-product-name="winter wear" data-product-price="80">
            <img src="https://images.pexels.com/photos/6712083/pexels-photo-6712083.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="winter coats" />
            <div class="des">
              <span><strong>T gurkha winter Jacket - Men</strong></span>
              <h5>Best for winters  </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
        </div>

      </div>

    </section>
    <!-- female section -->
    <section id="product1" class="section-p1">
        <h2>WOMEN</h2>
        <h4>FOR ALL AGE GROUPS</h4>

        <div class="pro-container" id="container">
          <!-- list of women products -->
          <div class="pro" data-product-name="Blazer men" data-product-price="60">
            <img src="https://images.pexels.com/photos/18129507/pexels-photo-18129507/free-photo-of-young-fashionable-woman-posing-outside.jpeg?auto=compress&cs=tinysrgb&w=600" alt="women-blazer" />
            <div class="des">
              <span>BlaZER women</span>
              <h5>Blazer 2024 Professional -women /h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>

          <div class="pro" data-product-name="Blazer men" data-product-price="60">
            <img src="https://images.pexels.com/photos/8307433/pexels-photo-8307433.jpeg?auto=compress&cs=tinysrgb&w=600" alt="women sports wear" />
            <div class="des">
              <span>formal sports wear women</span>
              <h5>
                sport wear for games <br>
                
              </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart(this)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>

          <div class="pro" data-product-name="Blazer men" data-product-price="60">
            <img src="https://images.pexels.com/photos/5143037/pexels-photo-5143037.jpeg?auto=compress&cs=tinysrgb&w=600" alt="GUrkha shorts" />
            <div class="des">
              <span><strong>Gurkha shorts  women</strong></span>
              <h5>trendy summer wears for outings and casual</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>


          <div class="pro" data-product-name="Blazer men" data-product-price="60">
            <img src="https://images.pexels.com/photos/7139041/pexels-photo-7139041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="kids-party wear" />
            <div class="des">
              <span><strong>party suits for yong kids </strong></span>
              <h5>Colourful Gurkha suits for kids/h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
          <div>
            <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>
         <div class="pro" data-product-name="Blazer men" data-product-price="60">
                <img src="https://images.pexels.com/photos/15984041/pexels-photo-15984041/free-photo-of-group-of-young-women-in-fashionable-outfits-standing-next-to-each-other-and-smiling.jpeg?auto=compress&cs=tinysrgb&w=600"
                
                alt="carlo jeans women" />
                <div class="des">
                  <span>women stylish JEANS</span>
                  <h5>
                    Zara jeans women
                  </h5>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h4>$70.60</h4>
                </div>
                <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>
       

         <div class="pro" data-product-name="Blazer men" data-product-price="60">
                <img src="https://images.pexels.com/photos/5257317/pexels-photo-5257317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="gurkha formal" />
                <div class="des">



                  <span>formal- old women</span>
                  <h5>
                    Gurkha formals  for old women
                  </h5>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h4>$60</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
              ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                >0</span
              >)</a
            >
          </div>

         <div class="pro" data-product-name="Blazer men" data-product-price="60">
                <img src="https://media.istockphoto.com/id/1279108197/photo/variety-of-womens-fashion-comfortable-shoes-of-all-seasons-on-a-light-background-top-view.jpg?s=612x612&w=0&k=20&c=_mdUMo2tsufgilqv8IQeW6hp8YjICTR8_tF-YP1Zgxk=" alt="women foot wear" />

                <div class="des">
                  <span>trendiest shoes</span>
                  <h5>
                    Gurkha shoes - for all generations
                  </h5>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <h4>$60</h4>
                  <h4>Available Quantity :<span id="Quantity">20</span></h4>
                </div>
                <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
                  ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
                    >0</span
                  >)</a
                >
          </div>

          <div class="pro" data-product-name="Blazer men" data-product-price="60">
            <img src="https://images.pexels.com/photos/6535345/pexels-photo-6535345.jpeg?auto=compress&cs=tinysrgb&w=600" alt="winter coats" />
            <div class="des">
              <span><strong>T gurkha COATS - WOMEN</strong></span>
              <h5>Best For Parties </h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>$160</h4>
              <h4>Available Quantity :<span id="Quantity">20</span></h4>
            </div>
            <a href="#" class="addToCart" onclick="addToCart('Blazer men', 60)"
          ><i class="fa-solid fa-cart-shopping"></i>(<span id="cartCounter"
            >0</span
          >)</a
        >
          </div>
          

        </div>

    </section>
    <!-- newsletter section -->
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
      <!-- footer section -->
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
