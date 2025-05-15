<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>list of product </h1>
       <a href="../index/index.php" class='btn btn-primary'>Back</a>
    <table border="2" class='table table-striped table-boredred container'>
<tr>
    <a href="insert.php">Add New Productin</a>
    <th>productid</th>
    <th>ProductCode</th>
    <th>Date</th>
    <th>Quantity</th>
    <th>UniquePrice</th>
    <th>TotalPrice</th>

    <th colspan="2">operation</th>
</tr>
<?php

include('conn.php');
$select=mysqli_query($conn,"SELECT * FROM productin");
while($row=mysqli_fetch_array($select)){


?>
<tr>
    
    <td><?php echo $row['ProductCode']?></td>
    <td><?php echo $row['Date']?></td>
    <td><?php echo $row['Quantity']?></td>
    <td><?php echo $row['UniquePrice']?></td>
    <td><?php echo $row['TotalPrice']?></td>
    
    <td><a href="delete.php?ProductCode=<?php echo $row['ProductCode']?>" class='btn btn-success'>Update</a></td>
    <td><a href="delete.php?ProductCode=<?php echo $row['ProductCode']?> " class='btn btn-danger'>delete</a></td>
    
</tr>
<?php
}?>
    </table>
</body>
</html>