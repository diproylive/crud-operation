<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href ="insert.php" class="text-light"> add user</a></button>


        <table class="table" border="5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Cpassword</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


  <?php

$sql = "SELECT * FROM users";
$result = mysqli_query($con,$sql);
if($result)
{
    while($row = mysqli_fetch_array($result))
    {
        ?>
             <tr>
                <th scope="row"><?php echo $row['Serial No'];?></th>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['Password'];?></td>
                <td><?php echo $row['Cpassword'];?></td>
                <td>
                    <button class="btn btn-primary"><a href = "update.php?updated_id=<?php echo $row['Serial No'];?>" title="update" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href = "delete.php?deleted_id=<?php echo $row['Serial No'];?>" title="delete" calss="text-light">Delete</a></button>
                </td>   
            </tr>

        <?php

    }
}



?>


 
    
  </tbody>
</table>
    </div>
    







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>