<?php
session_start();
include './common/db_connection.php';
$sql = "SELECT p_id, photo, name, price FROM products";
$result = $conn->query($sql);

if ($result === false) {
  die("Error in SQL query: " . $conn->error);
}

if (!isset($_SESSION['uid'])) {
  $_SESSION['p_no'] = 0;
}
else {
  $uid = $_SESSION['uid'];
  $countQuery = "SELECT COUNT(p_id) FROM user_carts WHERE u_id = $uid";
  $countResult = $conn->query($countQuery);

  if ($countResult === false) {
    die("Error in SQL query: " . $conn->error);
  }

  $countRow = $countResult->fetch_row();
  $productCount = $countRow[0];
  $_SESSION['p_no'] = $productCount;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="./images/June-logo-3.png" type="image/x-icon" />

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>June</title>
  <style>
    .form-group
    {
    width: 60rem;
    height: 6rem;
    }   
    /* Add this CSS to your stylesheet */
.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background-color: #fff; /* Set your desired background color */
  z-index: 1000; /* Adjust the z-index to ensure it's above other elements */
}

/* Add some padding to the content to prevent it from being hidden behind the fixed header */
.main-content {
  padding-top: 100px; /* Adjust the padding-top value as needed */
}

</style>
</head>

<body>

  <!-- Header -->
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="/" class="scroll-link">
              JUNE
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">JUNE</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#category" class="nav__link scroll-link">Category</a>
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">Blog</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link scroll-link">Contact</a>
              </li>
              <li class="nav__item">
                <a href="profile.php" class="nav__link scroll-link">Profile</a>
              </li>
              <li class="nav__item">
                <a href="logout.php" class="nav__link scroll-link">log out</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
            <a href="login.php?from_index=100" class="icon__item" id="login-btn" >
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>
            
            <a href="wishlist.php" class="icon__item" id="wishlist-btn">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
              </svg>
            </a>

            <a href="cart.php" class="icon__item" id="cart-btn">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total"><?php echo $_SESSION['p_no']; ?></span>
            </a>
          </div>
        </nav>
      </div>
    </div>
</header>
<section>
    <!-- Hero -->
    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <h1 class="">June Natural Soap</h1>
                  <p>Happiness Is Handmade</p>
                  <a href="#latest"><button class="hero__btn">SHOP NOW</button></a>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                  </div>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <h1 class="">June Natural Soap</h1>
                  <p>Happiness Is Handmade</p>
                  <a href="#latest"><button class="hero__btn">SHOP NOW</button></a>
                </div>
                <div class="hero__right">
                  <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>

          <button class="glide__bullet" data-glide-dir="=1"></button>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
</section>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="./images/collection_01.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>New Colors Introduced</span>
                <h1>Pure Mint</h1>
                <a href="#latest">SHOP NOW</a>
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="./images/collection_02.png" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>New Flavours</span>
                <h1>Coffee & Neem</h1>
                <a href="#latest">SHOP NOW</a>
              </div>
            </div>
          </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">All Products</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <?php
                  while($row = $result->fetch_assoc())
                  {
                    $soap_id = $row["p_id"];
                    $soap_name = $row["name"];
                    $soap_image = $row["photo"];
                    $soap_price = $row["price"];
                    $soap_data = base64_encode($soap_image);

                    echo '<li class="glide__slide">';
                    echo '<div class="product">';
                    echo '<div class="product__header">';
                    echo '<a href="product.php?product_id=' . $soap_id . '"><img style="height: 11rem; width: 50rem" src="data:image/jpeg;base64,' . $soap_data . '" alt="' . $soap_name . '"></a>';
                    echo '</div';
                    echo '<div class="product__footer">';
                    echo '<h3>' . $soap_name . '</h3>';
                    echo '<div class="rating">';
                    echo '<svg>
                            <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                          </svg>
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                          </svg>
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                          </svg>
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                          </svg>
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                          </svg>';
                    echo '</div>';
                    echo '<div class="product__price">';
                    echo '<h4>' . $soap_price . 'rs</h4>';
                    echo '</div>';
                    echo '<a href="logornot.php?product_id=' . $soap_id . '"><button type="submit" class="product__btn">Add To Cart</button></a>';
                    echo '</div>';
                    echo '<ul>';
                    echo '<li>
                            <a data-tip="Quick View" data-place="left" href="product.php?product_id=' . $soap_id . '">
                              <svg>
                                <use xlink:href="./images/sprite.svg#icon-eye"></use>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="logornot_wishlist.php?product_id=' . $soap_id . '" data-place="left">
                              <svg>
                                <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a data-tip="Add To Compare" data-place="left" href="#">
                              <svg>
                                <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                              </svg>
                            </a>
                          </li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</li>';
                  }
                ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="category__section section" id="category">
        <div class="tab__list">
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center"></div>
        </div>
    </div>
    </section>

    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <div class="container">
        <div class="facility__contianer" data-aos="fade-up" data-aos-duration="1200">
          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
              </svg>
            </div>
            <p>ALL KERALA FREE SHIPPING</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
              </svg>
            </div>
            <p>100% MONEY BACK GUARANTEE IF NOT USED</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
              </svg>
            </div>
            <p>MANY PAYMENT GATWAYS</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
              </svg>
            </div>
            <p>24/7 ONLINE SUPPORT</p>
          </div>
        </div>
      </div>
    </section>
    </div>

    <!-- Testimonial Section -->
    <section class="section testimonial" id="testimonial">
      <div class="testimonial__container">
        <div class="glide" id="glide_4">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile1.jpg" alt="profile">
                  </div>
                  <p>Ambitious BCA final year student with a passion for development.<br> Eager to learn and grow, and contribute to the tech industry.</p>
                  <div class="client__info">
                    <h3>Sreeraj S Chandran</h3>
                    <span>ft. JUNE</span>
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./images/profile2.jpg" alt="profile">
                  </div>
                  <p>Ambitious BCA final year student with a passion for development.<br> Eager to learn and grow, and contribute to the tech industry.</p>
                  <div class="client__info">
                    <h3>Santhra Soni</h3>
                    <span>ft. JUNE</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
          </div>
        </div>
      </div>
    </section>

    <!--New Section  -->
    <section class="section news" id="news">
      <div class="container">
        <div class="title__container">
          <div class="section__titles">
            <div class="section__title active">
              <span class="dot"></span>
              <h1 class="primary__title">updates ...</h1>
            </div>
          </div>
        </div>
        <div class="news__container">
          <div class="glide" id="glide_5">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/products/updates/soap1.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3>The benefits of subscribing to a Soap Subscription box</h3>
                      <p>Are you tired of constantly running out of soap? With a soap subscription box,
                         you can ensure that you never have to worry about that again. Experience the luxury of receiving regular 
                         delivery of artisanal soaps, allowing you to elevate …</p>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/products/updates/soap2.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3>3 benifits of Natural soap! Are they worth the extra mula?</h3>
                      <p>What are the benefits of natural soaps? Are they worth the extra money that you have to shell out?
                         In this blog post I am going to go through 5 reasons that I
                         think natural soap is worth the price</p>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/products/updates/soap3.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3>Handmade Natural Soaps for sale for over 20 years!</h3>
                      <p>Why buy my Handmade Natural Soap? You may be wondering wny you would want to buy my soap.
                         Here’s a few of the reasons why. Handmade natural soap means natural ingredients. These are handmade natural soaps,
                         which means they all …</p>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/products/updates/soap4.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3>Self care is Essential & can be life changing. My story!</h3>
                      <p>I have been talking about self care, along with healthy habits quite a bit recently in my blog posts.
                         It has primarily been in general terms, but today I wanted to share more from a personal level. 
                        Somewhere around 7 …</p>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./images/products/updates/soap1.jpg" alt="">
                    </div>
                    <div class="card__footer">
                      <h3>Travel Essentials for your skin on the go by June Soaps</h3>
                      <p>Jetsetter Skin Care: Your Passport to Healthy Skin Hey, globetrotters! I know you love to explore,
                         so do I. I absolutely love to travel!! But I don’t
                         want my skin to suffer in the rush of catching flights and ticking …</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- NewsLetter -->
    <section class="section newsletter" id="contact">
      <div class="container">
        <div class="newsletter__content">
          <div class="newsletter__data">
            <h3>SUBSCRIBE TO OUR SOAP STORE</h3>
            <p>Receive a fresh delivery of handcrafted soap to your door every month,<br> with new scents and styles to discover.</p>
          </div>
          <form action="" method="post">
            <input type="email" name="email"  placeholder="Enter your email address" class="newsletter__email">
            <button class="newsletter__link btn-dark" style="height: 5rem; width: 10rem" type="submit" name="subscribe">subscribe</button>
          </form>
        </div>
      </div>
    </section>  
    <?php
    if(isset($_POST['subscribe']))
    {
      $sub_email = $_POST['email'];
      $sql = "INSERT INTO subscribe (email) VALUES ('$sub_email')";
      $conn->query($sql);
    }
    ?>

  <!-- End Main -->

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer-top__box">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-top__box">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-location"></use>
              </svg>
            </span>
            Chinamaya College Of Arts, Commerce & Science <br>Near Statue Junction, Layam Road, Tripunithura, Kerala-682301, India
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-envelop"></use>
              </svg>
            </span>
            sreerajsc5@gmail.com
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span>
            8848066068
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
              </svg>
            </span>
            Kerala
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__box">

      </div>
      <div class="footer-bottom__box">

      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- PopUp 1 -->
  <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <img class="popup__img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Get New Year Discount <span>30%</span> Off</h1>
          <p>Sign up to our updates and save 30% for you next purchase. No spam, we promise!
          </p>
          <form action="" method="post">
            <input type="email" name="email"  placeholder="Enter your email..." class="newsletter__email popup__form">
            <button class="newsletter__link btn-dark" style="height: 5rem; width: 10rem" type="submit" name="subscribe">subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
    if(isset($_POST['subscribe']))
    {
      $sub_email = $_POST['email'];
      $sql = "INSERT INTO subscribe (email) VALUES ('$sub_email')";
      $conn->query($sql);
    }
    ?>
  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <svg>
      <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
    </svg>
  </a>


  <!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->

  <script src="./scripts/index.js"></script>
  <script src="./scripts/slider.js"></script>
</body>

</html>
<?php
  $conn->close();
?>