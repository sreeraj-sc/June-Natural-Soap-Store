<?php
    //$uid = $_SESSION['uid'];
    include './common/db_connection.php';
    include './common/CommonAdminHeader.php';
?>
<div class="container mt-5 p-5 ">
    <center>
        <h1 class="mt-5 p-5"><strong>Add Soap</strong></h1>
        <hr>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="soapname">Soap Name</label>
                <input type="text" class="form-control" id="soapname" name="soapname" placeholder="Enter soap name">
            </div><br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="image" required>
            </div><br>
            <div class="form-group">
                <label for="carPrice">Soap Price</label>
                <input type="number" class="form-control" id="soapprice" name="price" placeholder="Enter soap price">
            </div><br>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control">
                    <option value="Instock">Instock</option>
                    <option value="OutOfStock">OutOfStock</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter rating 0 - 5">
            </div><br>
            <div class="form-group">
                <label for="availability">Availability</label>
                <input type="number" class="form-control" id="availability" name="availability" placeholder="Enter Availability">
            </div><br>
            <div class="form-group">
                <label for="details">Details</label>
                <textarea id="details" class="form-control" name="details" rows="4" placeholder="discription"></textarea><br>
            </div><br><br><br>
            <div class="form-group">
                <Button type="submit" name="submit" class="btn-dark">Submit</Button>
            </div>
        </form>
    </center>
    
</div>
<?php
    include './common/CommonFooter.php';
    if (isset($_POST["submit"])) {
        $imageData = file_get_contents($_FILES["image"]["tmp_name"]);
        $imageName = $_POST["soapname"];
        $imagePrice = $_POST["price"];
        $imageStatus = $_POST['status'];
        $imageRating = $_POST['rating'];
        $imageAvailability = $_POST['availability'];
        $imageDetails = $_POST['details'];
    
        $stmt = $conn->prepare("INSERT INTO products (photo, name, price, status, rating, availability, details) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("Error preparing the statement: " . $conn->error);
        }
        
        
        // Use "ssd" for binding parameters
        $stmt->bind_param("ssdsdds", $imageData, $imageName, $imagePrice, $imageStatus, $imageRating, $imageAvailability, $imageDetails);
    
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
            alert("Image uploaded successfully");
            window.location.href = "";
          </script>';
        } else {
            echo '<script type="text/javascript">
            alert("image upload fail");
            window.location.href = "";
          </script>' . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    
?>