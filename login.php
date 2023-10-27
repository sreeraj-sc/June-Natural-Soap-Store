<?php
    ob_start();
    include './common/CommonHeader.php';
    include './common/db_connection.php';
?>
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
include './common/CommonFooter.php';

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
                if($_GET['from_index'] == 100)
                {
                    header('Location: index.php');
                }
                else
                {
                    $p_id = $_GET['product_id'];
                    header('Location: add_to_cart.php?product_id=' . $p_id);
                }
            }
        }
        else
        {
            echo "invalid password !!!";
        }
    }
}
ob_end_flush()
?>
