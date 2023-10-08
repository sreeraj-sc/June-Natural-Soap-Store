<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php

$db = new PDO('mysql:host=localhost;dbname=June_Natural_Soap_Store', 'root', 'root');

if(isset($_POST['submit']))
{
    try 
    {

        // Get the image data
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $filename = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];

        // Create a prepared statement to insert the image data into the database
        $sql = 'INSERT INTO home_page_images (filename, type, data) VALUES (?, ?, ?)';
        $stmt = $db->prepare($sql);

        // Bind the image data, filename, and type to the prepared statement
        $stmt->bindParam(1, $imageData, PDO::PARAM_LOB);
        $stmt->bindParam(2, $filename, PDO::PARAM_STR);
        $stmt->bindParam(3, $type, PDO::PARAM_STR);

        // Execute the prepared statement
        $stmt->execute();

        // Success message
        echo 'Image uploaded successfully!';

    }
    catch (Exception $e) 
    {

        // Handle the exception
        echo $e->getMessage();
    }
}

    ?>

</body>
</html>
