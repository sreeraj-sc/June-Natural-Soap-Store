<?php
session_start();
include './common/db_connection.php';

$product_id = $_GET['product_id'];
$user_id = $_SESSION['uid'];

$sql = "DELETE FROM user_carts WHERE u_id = ? AND p_id = ?";
$stmt = $conn->prepare($sql);
mysqli_stmt_bind_param($stmt, "ii", $user_id, $product_id);
$stmt->execute();

header('Location: cart.php');
?>
