<?php require 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Display Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="menu">
        <a href="add.php">Add Product</a> |
        <a href="display.php">Display Products</a> |
        <a href="search.php">Search</a>
    </div>

    <fieldset>
        <legend>DISPLAY</legend>
        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM products WHERE display='Yes'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $profit = $row['selling_price'] - $row['buying_price'];
                        echo "<tr>
                                <td>{$row['name']}</td>
                                <td>{$profit}</td>
                                <td><a href='edit.php?id={$row['id']}'>edit</a></td>
                                <td><a href='delete.php?id={$row['id']}'>delete</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No products to display</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>