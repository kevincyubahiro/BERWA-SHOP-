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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
     <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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