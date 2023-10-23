<?php
    session_start();
    //$uid = $_SESSION['uid'];
    include './common/CommonHeader.php';
    include './common/db_connection.php';   
?>
<style>
    .form-group
{
  height: 10vh;
  width: 150vh;
}
</style>
<div class="container mt-5 ">
    <center>
        <h1>Add Soap</h1><br>
        <hr>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="soapname">Soap Name</label>
                <input type="text" class="form-control" id="soapname" name="soapname" placeholder="Enter soap name">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="image" required>
            </div>
            <div class="form-group">
                <label for="carPrice">Soap Price</label>
                <input type="number" class="form-control" id="soapprice" name="price" placeholder="Enter soap price">
            </div>
            <div class="form-group">
                <Button type="submit" name="submit" class="btn-primary">Submit</Button>
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
    
        $stmt = $conn->prepare("INSERT INTO products (photo, name, price) VALUES (?, ?, ?)");

        if (!$stmt) {
            die("Error preparing the statement: " . $conn->error);
        }
        
        
        // Use "ssd" for binding parameters
        $stmt->bind_param("ssd", $imageData, $imageName, $imagePrice);
    
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
            alert("Image uploaded successfully");
            window.location.href = "redirect_page.php";
          </script>';
        } else {
            echo '<script type="text/javascript">
            alert("image upload fail");
            window.location.href = "redirect_page.php";
          </script>' . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    
?>