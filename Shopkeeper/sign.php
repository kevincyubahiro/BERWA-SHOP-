<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class='card m-3 container p-4'>
    <h2 class='text-center text-success'>create new account</h2>
    <form action="" method="post">
        <input type="text" name="UserName" id="" placeholder='username' class='form-control m-2' required>
        <input type="Password" name="Password" id="" placeholder='Password'class='form-control m-2'required>
        <button name='submit' class='btn btn-primary m-4 p-2 '>submitted</button>
    </form>
</body>
</html>
<?php

include('conn.php');
if(isset($_POST['submit'])){
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
    $insert=mysqli_query($conn,"INSERT INTO shopkeeper(UserName,`Password`) VALUES('$UserName','$Password')");
    if($insert){
      header('location:login.php');
    }
    else{
        echo"not inserted";
    }
}
?>