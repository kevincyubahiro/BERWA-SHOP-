<!DOCTYPE html>
<html lang="en">
<head>
    <style>
           nav{
        width: 100%;   
        padding: 10px;
    }
    a{
        margin-left: -2px;
        padding: 30px;
       text-decoration:"none";
        color: beige;
    }
    ul{
        display: flex;
    }
    li{
        list-style-type: none;
    }
    </style>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body class=' '>
    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ms-auto">
                <li><a href="../Shopkeeper/login.php"class=' btn btn-success m-2 btn-hover-info'>Shoopkeeper</a></li>
           
             <li><a href="../productIn/insert.php"class=' btn btn-success m-2'>ProductIn</a></li>
                <li><a href="../productout/insert.php"class=' btn btn-success m-2'>ProductOut</a></li>
                <li><a href="../productin/report.php"class=' btn btn-success m-2'>Report</a></li>
                
                <li><a href="../Shopkeeper/login.php" class=' btn btn-danger m-2'>logout</a></li>
            </ul>
        </nav> <br> <br> <br> <br>
     
    </div>
    
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