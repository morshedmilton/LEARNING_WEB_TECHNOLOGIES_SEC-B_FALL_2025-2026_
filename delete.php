<?php
require 'db.php';
$id = $_GET['id'];

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: display.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="POST" action="">
        <fieldset>
            <legend>DELETE PRODUCT</legend>
            <p><strong>Name:</strong>
                <?php echo $data['name']; ?>
            </p>
            <p><strong>Buying Price:</strong>
                <?php echo $data['buying_price']; ?>
            </p>
            <p><strong>Selling Price:</strong>
                <?php echo $data['selling_price']; ?>
            </p>
            <p><strong>Displayable:</strong>
                <?php echo $data['display']; ?>
            </p>
            <hr>
            <input type="submit" name="delete" value="Delete">
        </fieldset>
    </form>
</body>

</html>