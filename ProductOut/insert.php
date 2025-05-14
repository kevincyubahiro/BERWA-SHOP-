<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body class='container card'>
    <h2 class='text-success text-center'>productout</h2>
    <form action="" method="post">
        <input type="number" name="productouId" id="" placeholder='productouId' class='form-control m-2' required> <br>
        <input type="text" name="ProductCode" id="" placeholder='ProductCode'class='form-control m-2'required> <br>
        <input type="Date" name="Date" id="" placeholder='Date'class='form-control'><br>
        <input type="text" name="Quantity" id="" placeholder='Quantity'class='form-control m-2'required><br>
        <input type="text" name="UniquePrice" id="" placeholder='UniquePrice'class='form-control m-2'required><br>
        <input type="Password" name="TotalPrice" id="" placeholder='TotalPrice'class='form-control m-2'required><br>
        <button name='submit' class='btn btn-success'>submit</button>
    </form>
</body>
</html>
<?php

include('conn.php');
if(isset($_POST['submit'])){
    $productouId=$_POST['productouId'];
    $ProductCode=$_POST['ProductCode'];
    $Date=$_POST['Date'];
    $Quantity=$_POST['Quantity'];
    $UniquePrice=$_POST['UniquePrice'];
    $TotalPrice=$_POST['TotalPrice'];
    $insert=mysqli_query($conn,"INSERT INTO productout(productouId,ProductCode,`Date`,Quantity,UniquePrice,TotalPrice) VALUES('$productouId','$ProductCode','$Date','$Quantity','$UniquePrice','$TotalPrice')");
    if($insert){
  header('location:select.php');
    }
    else{
        echo"not inserted";
    }
}
?>