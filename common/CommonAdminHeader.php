<?php
    //$uid = $_SESSION['uid'];
    include './common/db_connection.php';
    session_start();
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
                <a href="add_product.php" class="nav__link scroll-link">add product</a>
              </li>
              <li class="nav__item">
                <a href="remove_update.php" class="nav__link scroll-link">remove or updates</a>
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">booking</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link scroll-link">history</a>
              </li>
            </ul>
          </div>
          <div class="nav__icons">
            <a href="login.php" class="icon__item" id="login-btn" onclick="">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>
            <a href="#" class="icon__item" id="search-btn">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a>
            <a href="cart.php" class="icon__item" id="cart-btn">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">3</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </header>
