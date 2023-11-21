<?php
    include './common/CommonAdminHeader.php';
    include './common/db_connection.php';
    echo '<div class="container mt-5 p-5" >';
    echo '<center class="mt-5">
        <h1><strong>User Management</strong></h1>
        </center>';
    $sql = "SELECT * FROM user_credentials";
    $result = mysqli_query($conn, $sql);
    echo "<div class='container'>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>" . $row['u_id'] . "</p>";
        echo "<p class='card-title'>" . $row['first_name'] . "  " . $row['last_name']. "</p>";
        echo "<p class='card-text'>" . $row['email'] . "</p>";
        echo "<p class='card-text'>" . $row['mobile_number'] . "</p>";
        echo "<p class='card-text'>" . $row['date_of_birth'] . "</p>";
        echo "<p class='card-text'>" . $row['address'] . "</p>";
        echo '<center class="mt-5">';
        echo "<a href='edit_user.php?id=" . $row['u_id'] . "' class='btn btn-dark mr-5'>Edit</a>";
        echo "<a href='delete_user.php?id=" . $row['u_id'] . "' class='btn btn-danger ml-5'>Delete</a>
                </center>";
        echo "</div>";
        echo "</div>";
        }
    } else {
    echo "No users found.";
    }
    echo "</div>";
?>