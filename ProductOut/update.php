<?php
include('conn.php');

// Step 1: Get ProductCode from GET for editing
if (isset($_GET['ProductCode'])) {
    $ProductCode = $_GET['ProductCode'];

    // Fetch record to edit
    $select = mysqli_query($conn, "SELECT * FROM productout WHERE ProductCode='$ProductCode'");
    $row = mysqli_fetch_array($select);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product Out</title>
</head>
<body>
    <h2>Product Out</h2>
    <form action="" method="post">
        <input type="hidden" name="originalCode" value="<?php echo $row['ProductCode']; ?>">
        
        <input type="number" name="productouId" placeholder="Product Out ID" 
               value="<?php echo $row['productouId']; ?>"> <br>

        <input type="text" name="ProductCode" placeholder="Product Code" 
               value="<?php echo $row['ProductCode']; ?>"> <br>

        <input type="date" name="Date" placeholder="Date" 
               value="<?php echo $row['Date']; ?>"> <br>

        <input type="text" name="Quantity" placeholder="Quantity" 
               value="<?php echo $row['Quantity']; ?>"> <br>

        <input type="text" name="UniquePrice" placeholder="Unique Price" 
               value="<?php echo $row['UniquePrice']; ?>"> <br>

        <input type="text" name="TotalPrice" placeholder="Total Price" 
               value="<?php echo $row['TotalPrice']; ?>"> <br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>

<?php
// Step 2: Update if form is submitted
if (isset($_POST['submit'])) {
    $productouId = $_POST['productouId'];
    $ProductCode = $_POST['ProductCode'];
    $Date = $_POST['Date'];
    $Quantity = $_POST['Quantity'];
    $UniquePrice = $_POST['UniquePrice'];
    $TotalPrice = $_POST['TotalPrice'];
     // Use the original code for the WHERE clause

    // Make sure this table name matches your actual DB table
    $update = mysqli_query($conn, "UPDATE productout SET 
        productouId='$productouId', 
        ProductCode='$ProductCode', 
        Date='$Date', 
        Quantity='$Quantity', 
        UniquePrice='$UniquePrice', 
        TotalPrice='$TotalPrice' 
        WHERE ProductCode='$ProductCode'");

    if ($update) {
       header('location:select.php');
    } else {
        echo "Update failed: " ;
    }
}
?>
