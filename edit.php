<?php
require 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $updateSql = "UPDATE products SET 
                  name='$name', 
                  buying_price='$buying_price', 
                  selling_price='$selling_price', 
                  display='$display' 
                  WHERE id=$id";

    if ($conn->query($updateSql) === TRUE) {
        header("Location: display.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="POST" action="">
        <fieldset>
            <legend>EDIT PRODUCT</legend>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $data['name']; ?>">

            <label>Buying Price</label>
            <input type="number" name="buying_price" value="<?php echo $data['buying_price']; ?>">

            <label>Selling Price</label>
            <input type="number" name="selling_price" value="<?php echo $data['selling_price']; ?>">

            <hr>
            <input type="checkbox" name="display" value="Yes" <?php if ($data['display'] == 'Yes')
                echo 'checked'; ?>>
            Display
            <hr>

            <input type="submit" name="update" value="SAVE">
        </fieldset>
    </form>
</body>

</html>