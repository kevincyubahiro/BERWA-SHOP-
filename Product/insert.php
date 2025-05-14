<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
     <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <form action="" method="post" class='card  p-5 container'>
     
        <input type="text" name="ProductCode" id="" placeholder='ProductCode' class='form-control m-4' required>
        <input type="Password" name="ProductName" id="" placeholder='ProductName' class='form-control m-4'required>
        <button name='submit' class='btn btn-success'>product</button>
    </form>
</body>
</html>
<?php

include('conn.php');
if(isset($_POST['submit'])){
    $ProductCode=$_POST['ProductCode'];
    $ProductName=$_POST['ProductName'];
    $insert=mysqli_query($conn,"INSERT INTO product(ProductCode,`ProductName`) VALUES('$ProductCode','$ProductName')");
    if($insert){
 header('location:select.php');
    }
    else{
        echo"not inserted";
    }
}
?>