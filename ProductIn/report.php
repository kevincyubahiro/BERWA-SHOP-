<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=' container table table-striped'>
    <h1 class='text-center text-success'>Report of product </h1>
    <table border="2" class='table table-striped table-bordered'>
<tr>
    <a href="../index/index.php" class='btn btn-primary'>Back</a>
    <thead  class=''>
   
    <th class='bg-dark text-white'>productid</th>
    <th class='bg-dark text-white'>ProductCode</th>
    <th class='bg-dark text-white'>Date</th>
    <th class='bg-dark text-white'>Quantity</th>
    <th class='bg-dark text-white'>UniquePrice</th>
    
    
     </thead>
</tr>
<?php

include('conn.php');
$select=mysqli_query($conn,"select * from  productin join productout on productin.ProductCode=productin.ProductCode");
while($row=mysqli_fetch_array($select)){


?>
<tr>
    
    <td><?php echo $row['ProductCode']?></td>
    <td><?php echo $row['Date']?></td>
    <td><?php echo $row['Quantity']?></td>
    <td><?php echo $row['UniquePrice']?></td>
    <td><?php echo $row['TotalPrice']?></td>
    
    
    
</tr>
<?php
}?>
    </table>
</body>
</html>