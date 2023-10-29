<?php
  session_start();
  include './common/db_connection.php';
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
  <script src="./scripts/index.js"></script>
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
            <a href="index.php" class="scroll-link">
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
                <a href="index.php" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="index.php#category" class="nav__link scroll-link">Category</a>
              </li>
              <li class="nav__item">
                <a href="index.php#news" class="nav__link scroll-link">Blog</a>
              </li>
              <li class="nav__item">
                <a href="index.php#contact" class="nav__link scroll-link">Contact</a>
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

            <a href="wishlist.php" class="icon__item" id="wishlist-btn" >
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
</body>
