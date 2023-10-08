<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/June-logo-3.png" type="image/x-icon" />


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="style/style.css" type="text/css">

    <title>June</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
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
