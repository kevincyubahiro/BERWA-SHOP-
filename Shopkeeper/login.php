<!DOCTYPE html>
<html lang="en">
<head> <style>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ms-auto">
              
                <li><a href="../product/insert.php"class=' btn btn-success m-2'>Product</a></li>
             <li><a href="../productIn/insert.php"class=' btn btn-success m-2'>ProductIn</a></li>
                <li><a href="../productout/insert.php"class=' btn btn-success m-2'>ProductOut</a></li>
                <li><a href="../productin/report.php"class=' btn btn-success m-2'>Report</a></li>
                
              
            </ul>
        </nav> <br> <br> <br> <br>
     
    </div>
    <h2 class='text-center text-success'>login</h2>
    <form action="" method="post" class='card p-4 container p-4'>
        <input type="text" name="UserName" id="" placeholder='username'class='m-3' required>
        <input type="Password" name="Password" id="" placeholder='Password' class='m-3'required>
        <button name='submit' class='btn btn-primary m-3'>Login</button>
        <a href="sign.php"class='text-end'>Create Account</a>
    </form>
</body>
</html>
<?php
session_start();
include('conn.php');
if(isset($_POST['submit'])){
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
    $insert=mysqli_query($conn,"SELECT * FROM shopkeeper WHERE UserName='$UserName'  AND `Password`='$Password'");
    $count=mysqli_num_rows($insert);
    if($count){
       $_SESSION['$UserName']=$_POST['UserName'];
       $_SESSION['$Password']=$_POST['Password'];
       header('location:../index/index.php');
    }
    else{
        echo"Invalid credentaial";
    }
}
?>