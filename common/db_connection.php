<?php
$conn=mysqli_connect('localhost','root','','June_Natural_Soap_Store');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}