<?php
include 'connection.php';


if (isset($_GET['deleted_id'])) 
{
    $id=$_GET['deleted_id'];
    $sql = "DELETE FROM `users` WHERE `users`.`Serial No` = '$id'";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        //echo "Record Deleted Successfully";
        header("Location:index.php");
    }
    else{
        die("Connection failed: ". mysqli_connect_error());
    }
}


?>