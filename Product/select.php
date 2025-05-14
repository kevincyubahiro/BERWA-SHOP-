<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
     <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1 class='text-center text-success'>list of product </h1>
    <table border="2" class='table table-striped table-bordered  container '>
<tr>
    <a href="insert.php" class='btn btn-success m-3'>Add New </a>
    <th>ProductCode</th>
    <th>ProductName</th>
    <th colspan="2">operation</th>
</tr>
<?php

include('conn.php');
$select=mysqli_query($conn,"SELECT * FROM product");
while($row=mysqli_fetch_array($select)){


?>
<tr>
    <td><?php echo $row['ProductCode']?></td>
    <td><?php echo $row['ProductName']?></td>
    <td><a href="delete.php?ProductCode=<?php echo $row['ProductCode']?>" class='btn btn-warning'>Update</a></td>
    <td><a href="delete.php?ProductCode=<?php echo $row['ProductCode']?>" class='btn btn-danger'>delete</a></td>
    
</tr>
<?php
}?>
    </table>
</body>
</html>