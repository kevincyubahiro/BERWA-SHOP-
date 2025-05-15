<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class='container'> <a href="../index/index.php" class='btn btn-primary'>Back</a>
    <h2 class='text-center text-info'>Import production</h2>
      
    <form action="" method="post">
        <input type="number" name="" id=""placeholder=' importin_id' class='form-control'> <br>
        <input type="text" name="ProductCode" id="" placeholder='ProductCode'class='form-control'> <br>
        <input type="Date" name="Date" id="" placeholder='Date'class='form-control'><br>
        <input type="text" name="Quantity" id="" placeholder='Quantity'class='form-control'><br>
        <input type="text" name="UniquePrice" id="" placeholder='UniquePrice'class='form-control'><br>
        <input type="Password" name="TotalPrice" id="" placeholder='TotalPrice'class='form-control'><br>
        <button name='submit' class='btn btn-success m-3'>productin</button>
    </form>
</body>
</html>
<?php

include('conn.php');
if(isset($_POST['submit'])){
    $ProductCode=$_POST['ProductCode'];
    $Date=$_POST['Date'];
    $Quantity=$_POST['Quantity'];
    $UniquePrice=$_POST['UniquePrice'];
    $TotalPrice=$_POST['TotalPrice'];
    $insert=mysqli_query($conn,"INSERT INTO Productin(ProductCode,`Date`,Quantity,UniquePrice,TotalPrice) VALUES('$ProductCode','$Date','$Quantity','$UniquePrice','$TotalPrice')");
    if($insert){
  header('location:select.php');
    }
    else{
        echo"not inserted";
    }
}
?>