<?php
require 'db.php';

$name = isset($_GET['name']) ? $_GET['name'] : '';

if (!empty($name)) {
    $sql = "SELECT * FROM products WHERE name LIKE '%$name%'";
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
        echo "<tr><td colspan='4'>No result found</td></tr>";
    }
}
?>