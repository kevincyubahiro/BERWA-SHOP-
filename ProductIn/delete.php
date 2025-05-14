<?php
include('conn.php');
$ProductCode=$_GET['ProductCode'];
$delete=mysqli_query($conn,"DELETE FROM productIn WHERE ProductCode='$ProductCode'");
if($delete){
    echo"deleted";
}
else{
    echo"not delete";
}

?>