<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>June - Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/test.css">
    <style>
      .form-control
      {
        width: 100vh;
      }
    </style>
</head>
<body>
    <center>
      <div class="container mt-4 p-3">
        <div>
            <h2 class="text-center">Sign Up</h2>
            <hr>
            <form action="" method="post">
              <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="fname" required>
              </div>
              <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lname" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="mobile-number" required>
              </div>
              <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
              </div>
              <div class="form-group">
                  <label for="confirmpwd">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmpwd" placeholder="Confirm Password" name="confirmpwd" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </center>
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
        $password = $_POST['pswd'];
        $pass_con = $_POST['confirmpwd'];
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