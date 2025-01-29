<?php
require 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) 
            VALUES ('$name', '$buying_price', '$selling_price', '$display')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Added!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="menu">
        <a href="add.php">Add Product</a> |
        <a href="display.php">Display Products</a> |
        <a href="search.php">Search</a>
    </div>

    <form method="POST" action="">
        <fieldset>
            <legend>ADD PRODUCT</legend>
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Buying Price</label>
            <input type="number" name="buying_price" step="0.01" required>

            <label>Selling Price</label>
            <input type="number" name="selling_price" step="0.01" required>

            <hr>
            <input type="checkbox" name="display" value="Yes"> Display
            <hr>

            <input type="submit" name="save" value="SAVE">
        </fieldset>
    </form>
</body>

</html>