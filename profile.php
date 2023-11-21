<?php
include './common/CommonHeader.php';
include './common/db_connection.php';

// Get the user ID from the URL
$user_id = $_SESSION['uid'];

// Fetch user details from the database
$sql = "SELECT * FROM user_credentials WHERE u_id = '" . $user_id . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<center>";
    echo "<div class='container mt-5 pt-5'>";
    /*echo "<div class='profile-header'>";
    echo "<img src='" . $row['user_image'] . "' alt='" . $row['first_name'] . "' class='profile-image'>";
    echo "<div class='profile-info'>";
    echo "<h2>" . $row['first_name'] . "</h2>";
    echo "<p>Email: " . $row['email'] . "</p>";
    echo "<p>Address: " . $row['address'] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";*/
    echo "<div class='card mt-5 pt-5' style='width: 60rem;'>";
    echo "<div class='card-body'>";
    echo "<h1 class='card-title'>" . $row['first_name'] . "  " . $row['last_name'] . "</h1>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>" . $row['email'] . "</h6>";
    echo "<p class='card-text'>" . $row['mobile_number'] . "</p>";
    echo "<p class='card-text'>" . $row['date_of_birth'] . "</p>";
    echo "<p class='card-text'>" . $row['address'] . "</p>";
    echo "<a href='edit_profile.php' class='card-link'>Edit profile</a>";
    echo "<a href='change_password.php' class='card-link'>change password</a>";
    echo "</div>";
    echo "</div>
    </div>";
    echo "</center>";
} else {
    echo "User not found.";
}
