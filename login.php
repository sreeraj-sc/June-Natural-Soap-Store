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
    .form-control
    {
        width: 40rem;
        height: 4rem;
    }
    a
    {
        color: black;
    }
  </style>
</head>
<body class="text-center">
    <center>
    <div class="m-5 p-5 form">
    <form class="form-signin" action="" method="post"><br><br><br><br><br><br>
    <h1 class="mb-3">Please sign in</h1>
    <label for="inputEmail " class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control email" name="email" placeholder="Email address" required autofocus><br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control password" name="password" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-dark btn-block form-control" id="login" type="submit" name="login">Sign in</button>
    </form>
    <p>Don't have an account ? <a href="registeration.php">Sign Up</a></p>
    </div>
    </center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
include './common/db_connection.php';
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $passphrase = $_POST['password'];
    $pass_hashed = md5($passphrase);
    if($email == "admin@gmail.com" && $passphrase == "admin")
    {
        header('Location: add_product.php');
    }
    else
    {
        $sql = "SELECT * FROM user_credentials WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) 
        {
            $data = $result->fetch_assoc();
            $uid = $data['u_id'];
            $_SESSION['uid'] = $uid;
            $_SESSION['uname'] = $data['first_name'];
            if($pass_hashed === $data['passphrase'])
            {
                echo $_SESSION['uid'];
                $p_id = $_GET['product_id'];
                header('Location: add_to_cart.php?product_id=' . $p_id);
            }
        }
        else
        {
            echo "invalid password !!!";
        }
    }
}
?>
