<!DOCTYPE html>
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
            <div class="col d-flex flex-column justify-content-center align-items-center main">
                <h1 class="title"><a href="login.html" class="title">JUNE</a></h1>
                <p><a href="login.html" class="content">Natural Soap Store</a></p>
                <div class="log p-5 m-5">
                    <h4>Log in</h4>
                    <hr>
                    <form action="" method="post">
                        <label for="email">Email</label><br>
                        <input type="text" id="email-number" name="email-number" placeholder="email" class="custom-input"><br><br>
                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="password" placeholder="password" class="custom-input"><br><br>
                        <p id="invalid_user_password"></p>
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="submit" value="submit" class="submit" name="submit">
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <p>Don't have an account? <a href="registration.php"><strong>Sign Up</strong></a></p>
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
        $email_num = $_POST['email-number'];
        $passphrase = $_POST['password'];
        $hash_pass = md5($passphrase);
        $sql = "SELECT * FROM user_credentials WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email_num);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            $data = $result->fetch_assoc();
            if($data['passphrase'] == $hash_pass)
            {
                $_SESSION['username'] = $data['first_name'];
                $_SESSION['mobile'] = $data['mobile_number'];
                header("Location: home.php");
            }
            else
            {
                echo '<script src="script/script.js"></script>';
                echo '<script type="text/javascript">invalid_user_pass();</script>';
            }
        }
        else
        {
            echo '<script src="/script/script.js"></script>';
            echo '<script type="text/javascript">user_notfound();</script>';
        }
        $conn->close();
    }
?>