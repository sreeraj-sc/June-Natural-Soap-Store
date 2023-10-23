<?php
    include './common/CommonHeader.php';
    include './common/db_connection.php';   
    $sql = "SELECT photo, name FROM products";
    $result = $conn->query($sql);
    
    if ($result === false) {
        die("Error in SQL query: " . $conn->error);
    }
    ?>
    <div id="image-container">

        <?php
        while ($row = $result->fetch_assoc()) {
            $imageName = $row["name"];
            $imageData = $row["photo"];
            $imageBase64 = base64_encode($imageData);
            
            echo '<div class="image-box">';
            echo '<img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="' . $imageName . '" />';
            echo '<p>' . $imageName . '</p>';
            echo '</div>';
        }
        ?>
    </div>