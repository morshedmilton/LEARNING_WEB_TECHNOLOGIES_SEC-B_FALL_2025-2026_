<!DOCTYPE html>
<html>

<head>
    <title>Search Product</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="menu">
        <a href="add.php">Add Product</a> |
        <a href="display.php">Display Products</a> |
        <a href="search.php">Search</a>
    </div>

    <fieldset>
        <legend>SEARCH</legend>
        <input type="text" id="search_text" onkeyup="searchProduct()" placeholder="Search By Name" style="width:60%">
        <input type="button" value="Search By Name" onclick="searchProduct()" style="width:35%">
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody id="search_result">
            </tbody>
        </table>
    </fieldset>
</body>

</html>