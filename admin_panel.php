<?php
    session_start();
    $uid = $_SESSION['uid'];
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
        <form action="" method="post">
            <div class="form-group">
                <label for="soapname">Soap Name</label>
                <input type="text" class="form-control" id="soapname" name="soapname" placeholder="Enter soap name">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" placeholder="Insert Image" name="simage" required>
            </div>
            <div class="form-group">
                <label for="carPrice">Soap Price</label>
                <input type="number" class="form-control" id="soapprice" name="soapprice" placeholder="Enter soap price">
            </div>
            <div class="form-group">
                <Button type="submit" name="add" class="btn-primary">Submit</Button>
            </div>
        </form>
    </center>
</div>
<?php
    include './common/CommonFooter.php';
    if (isset($_REQUEST['add'])) {

        $Cname = $_REQUEST['soapname'];
        $sprice = $_REQUEST['soapprice'];

        $filename = $_FILES["simage"]["name"];
        $tempname = $_FILES["simage"]["tmp_name"];
        $folder = "image/" . $filename;

        if (move_uploaded_file($tempname, './images/' . $filename)) {
            $qryCheck = "SELECT COUNT(*) AS cnt FROM `soaps` WHERE `soapname` = '$pname' OR `sprice` = '$price'";
            $qryOut = mysqli_query($conn, $qryCheck);
            $fetchData = mysqli_fetch_array($qryOut);

            if ($fetchData['cnt'] > 0) {
                echo "<script>alert('Already exist ');
                window.location = 'AddCars.php';
                </script>";
            } 
            else {
                $qryReg = "INSERT INTO car(`cphoto`,`cname`,`cmodel`,`cfuel`,`cprice`,`cdesc`)VALUES('$filename','$Cname','$Cmodel','$Cfuel','$Cprice','$Cdescription')";
                echo $qryReg . "&& ";
                if ($conn->query($qryReg) == TRUE) {
                    echo "<script>alert(' Success');window.location = 'ViewCars.php';</script>";
                } 
                else {
                    echo "<script>alert(' Failed');window.location = 'AddCars.php';</script>";
                }
            }
        }
    }
?>