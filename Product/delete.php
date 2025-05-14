<?php
include('conn.php');
$ProductCode=$_GET['ProductCode'];
$delete=mysqli_query($conn,"DELETE FROM product WHERE ProductCode='$ProductCode'");
if($delete){
   header('location:select.php');
}
else{
    echo"not delete";
}

?>