<?php
include './common/db_connection.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $passphrase = $_POST['password'];
    $hash_pass = md5($passphrase);
    $sql = "SELECT * FROM user_credentials WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['uid'] = $data['u_id'];
        $_SESSION['username'] = $data['first_name'];
        header('Location: index.php');
    } else {
        echo "user not found";
    }
    $conn->close();
}
?>
