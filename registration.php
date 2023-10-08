<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/June-logo-3.png" type="image/x-icon" />


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="style/style.css" type="text/css">

    <title>June</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <section class="container-fluid">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <h1 class="title"><a href="registration.html" class="title">JUNE</a></h1>
          <p><a href="registration.html" class="content">Natural Soap Store</a></p>
        </div>
        <div class="col">
          <div class="reg-div d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="reg p-5"> 
              <h4>Create an account</h4>
              <hr>
              <form action="" method="post">
                <label for="name">Name</label><br>
                <input type="text" id="fname" name="fname" placeholder=" first name" class="custom-input">
                <input type="text" id="lname" name="lname" placeholder=" last name" class="custom-input"><br><br>
                <label for="Mobile_number">Mobile number</label><br>
                <select name="contry-code" id="contry-code" name="contry-code" class="custom-input">
                  <option value="+91">+91 (India)</option>
                  <option value="+1">+1 (USA)</option>
                </select>
                <input type="number" id="mobile-number" placeholder=" number" name="mobile-number" class="custom-input"><br><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder=" email" class="custom-input"><br><br>
                <label for="date-of-birth">Date Of Birth</label><br>
                <input type="date" id="dob" name="dob" class="custom-input"><br><br>
                <label for="password">Password</label><br>
                <input type="text" id="password" name="password" placeholder=" include atleast 6 characters" class="custom-input"><br>
                <p>| password must be at least 6 characters</p>
                <label for="con-password">Confirm password</label><br>               
                <input type="text" id="con-password" name="con-password" placeholder=" confirm password" class="custom-input"><br><br><br>
                <div class="d-flex justify-content-center align-items-center">
                  <input type="submit" value="submit" class="submit" name="submit">
                </div>
              </form><br>
              <div class="d-flex justify-content-center align-items-center">
                <p>log in to existing account? <a href="index.php"><strong>Log In</strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('db_connection.php');
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $contry_code = $_POST['contry-code'];
        $mobile_number = $_POST['mobile-number'];
        $email = $_POST['email'];
        $date_of_birth = $_POST['dob'];
        $password = $_POST['password'];
        $pass_con = $_POST['con-password'];
        if($password == $pass_con)
        {
            $pass_hashed = md5($pass);
            $sql = "INSERT INTO user_credentials(first_name, last_name, contry_code, mobile_number, email, date_of_birth, passphrase) VALUES ('$first_name', '$last_name', '$contry_code', '$mobile_number', '$email', '$date_of_birth', '$pass_hashed')";
            if($conn->query($sql) === TRUE)
            {
                header("Location: home.php");
                exit();
            }
            else
            {
                echo "failed";
            }
        }
        else
        {
            echo '<script src="script/script.js"></script>';
            echo '<script type="text/javascript">password_missmatch();</script>';
        }
        $conn->close();
    }
?>