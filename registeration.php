<?php
    session_start();
    include('./common/db_connection.php');
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
    .form-control
    {
        width: 40rem;
        height: 4rem;
    }
  </style>
</head>
<body class="text-center">
    <center>
    <div class="m-5 p-5 form">
    <form class="form-signin" action="" method="post"><br>
    <h1 class="mb-3">Please sign up</h1>
    <label for="inputFname" class="sr-only">first Name</label>
    <input type="text" id="inputfname" class="form-control fname" name="fname" placeholder="first name" required autofocus><br>
    <label for="inputLname" class="sr-only">Last Name</label>
    <input type="text" id="inputlname" class="form-control lname" name="lname" placeholder="Last name" required autofocus><br>
    <label for="number" class="sr-only">Phone number</label>
    <input type="number" id="phnumber" class="form-control phnumber" name="mobile-number" placeholder="phone number" required autofocus><br>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control email" name="email" placeholder="Email address" required autofocus><br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control password" name="pswd" placeholder="Password" required><br>
    <label for="inputcunpassword" class="sr-only">Cunfirm Password</label>
    <input type="password" id="inputcunpassword" class="form-control confirmpwd" name="confirmpwd" placeholder="Cun-Password" required>
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-dark btn-block form-control" id="login" type="submit" name="submit">Sign in</button>
    </form>
    </div>
    </center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        //$contry_code = $_POST['contry-code'];
        $mobile_number = $_POST['mobile-number'];
        $email = $_POST['email'];
        //$date_of_birth = $_POST['dob'];
        $password = $_POST['pswd'];
        $pass_con = $_POST['confirmpwd'];
        if($password == $pass_con)
        {
            $pass_hashed = md5($password);
            $sql = "INSERT INTO user_credentials(first_name, last_name, contry_code, mobile_number, email, date_of_birth, passphrase) VALUES ('$first_name', '$last_name', '$contry_code', '$mobile_number', '$email', '$date_of_birth', '$pass_hashed')";
            if($conn->query($sql) === TRUE)
            {
                $_SESSION['username'] = $first_name;
                $qry = "SELECT u_id, first_name FROM user_credentials";
                $res = $conn->query($qry);
                while($row = $res->fetch_assoc())
                {
                    if($row['first_name'] == $first_name)
                    {
                        echo "success";
                        $_SESSION['uid'] = $row['u_id'];
                    }
                }
                header("Location: index.php");
                exit();
            }
            else
            {
                echo "failed";
            }
        }
        else
        {
            echo "missmatch";
            echo '<script src="script/script.js"></script>';
            echo '<script type="text/javascript">password_missmatch();</script>';
        }
        $conn->close();
    }
?>