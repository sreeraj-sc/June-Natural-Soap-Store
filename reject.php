<?php
session_start();
include './common/db_connection.php';

$u_id = $_SESSION['uid'];
$b_id = $_GET['booking_id'];
$encodedp_ids = $_GET['p_ids'];
$p_ids = explode(',', $encodedp_ids);
$price = $_GET['price'];

$sql = "INSERT INTO history(b_id, u_id, p_ids, price, status) VALUES ('$b_id', '$u_id', '$encodedp_ids', '$price', 'REJECTED')"; 

if ($conn->query($sql) === TRUE) {
    $sql2 = "DELETE FROM bookings WHERE b_id = ?";

    if ($stmt = $conn->prepare($sql2)) {
        $stmt->bind_param("i", $b_id);
        if ($stmt->execute()) {
            header('Location: booking.php');
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
