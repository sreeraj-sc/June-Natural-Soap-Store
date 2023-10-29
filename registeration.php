<?php
    include './common/CommonHeader.php';
    include './common/db_connection.php';
    ob_start();
?>
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
    <label for="inputdob" class="sr-only">Date Of Birth</label>
    <input type="date" id="inputdob" class="form-control dob" name="dob" placeholder="Date Of Birth" required autofocus><br>
    <label for="address" class="sr-only">Address</label>
    <textarea id="address" class="form-control" name="address" rows="4" placeholder="address"></textarea><br>
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
    </form><br>
    <p>Already Have An Account ? <a href="login.php">Log in</a></p>
    </div>
    </center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include './common/CommonFooter.php';
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        //$contry_code = $_POST['contry-code'];
        $mobile_number = $_POST['mobile-number'];
        $email = $_POST['email'];
        $date_of_birth = $_POST['dob'];
        $address = $_POST['address'];
        $password = $_POST['pswd'];
        $pass_con = $_POST['confirmpwd'];
        if($password == $pass_con)
        {
            $pass_hashed = md5($password);
            if(strlen($mobile_number) == 10)
            {
                $stmt = $conn->prepare("INSERT INTO user_credentials (first_name, last_name, mobile_number, email, date_of_birth, address, passphrase) VALUES (?, ?, ?, ?, ?, ?, ?)");
                if (!$stmt) {
                    die("Error preparing the statement: " . $conn->error);
                }
                $stmt->bind_param("sssssss", $first_name, $last_name, $mobile_number, $email, $date_of_birth, $address, $pass_hashed);    
                if ($stmt->execute())
                {
                    $_SESSION['username'] = $first_name;
                    $qry = "SELECT u_id, first_name FROM user_credentials";
                    $res = $conn->query($qry);
                    if($row = $res->fetch_assoc())
                    {
                        echo "success";
                        $_SESSION['uid'] = $row['u_id'];
                        $_SESSION['uname'] = $first_name;
                        echo '<script type="text/javascript">
                            alert("Registration SuccessFull\nHello ' . $first_name . '");
                            window.location.href = "index.php";
                            </script>';
                    }
                    else
                    {
                        echo '<script type="text/javascript">
                            alert("Registration UnsuccessFull\nTry Using With Different Email ID !!!");
                            window.location.href = "";
                            </script>';
                    }
                }
            }
            else if(strlen($mobile_number) > 10 || strlen($mobile_number) < 10)
            {
                echo '<script type="text/javascript">
                            alert("Mobile number Must be 10 digits !");
                            </script>';
            }
        }
        else
        {
            echo '<script type="text/javascript">
                    alert("Password MissMatch !");
                    </script>';
        }
        $conn->close();
    }
    ob_end_flush()
?>