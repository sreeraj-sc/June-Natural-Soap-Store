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
                <a href="#header" class="nav__link scroll-link">add product</a>
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
            <a href="#" class="icon__item" id="login-btn" onclick="closePopup()">
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

<div class="container mt-5 ">
    <center>
        <h1>Add Soap</h1><br>
        <hr>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="soapname">Soap Name</label>
                <input type="text" class="form-control" id="soapname" name="soapname" placeholder="Enter soap name">
            </div><br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="image" required>
            </div><br>
            <div class="form-group">
                <label for="carPrice">Soap Price</label>
                <input type="number" class="form-control" id="soapprice" name="price" placeholder="Enter soap price">
            </div><br>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control">
                    <option value="Instock">Instock</option>
                    <option value="OutOfStock">OutOfStock</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter rating 0 - 5">
            </div><br>
            <div class="form-group">
                <label for="availability">Availability</label>
                <input type="number" class="form-control" id="availability" name="availability" placeholder="Enter Availability">
            </div><br>
            <div class="form-group">
                <label for="details">Details</label>
                <textarea id="details" class="form-control" name="details" rows="4" placeholder="discription"></textarea><br>
            </div><br><br><br>
            <div class="form-group">
                <Button type="submit" name="submit" class="btn-primary">Submit</Button>
            </div>
        </form>
    </center>
    
</div>
</body>
<?php
    include './common/CommonFooter.php';
    if (isset($_POST["submit"])) {
        $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
        $imageName = $_POST["soapname"];
        $imagePrice = $_POST["price"];
        $imageStatus = $_POST['status'];
        $imageRating = $_POST['rating'];
        $imageAvailability = $_POST['availability'];
        $imageDetails = $_POST['details'];
    
        $stmt = $conn->prepare("INSERT INTO products (photo, name, price, status, rating, availability, details) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("Error preparing the statement: " . $conn->error);
        }
        
        
        // Use "ssd" for binding parameters
        $stmt->bind_param("ssdsdds", $imageData, $imageName, $imagePrice, $imageStatus, $imageRating, $imageAvailability, $imageDetails);
    
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
            alert("Image uploaded successfully");
            window.location.href = "admin_panel.php";
          </script>';
        } else {
            echo '<script type="text/javascript">
            alert("image upload fail");
            window.location.href = "admin_panel.php";
          </script>' . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    
?>