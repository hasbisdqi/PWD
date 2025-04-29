<?php
$conn = mysqli_connect('localhost', 'root', '', 'nwind');
$productSQL = "SELECT * FROM products AS p
INNER JOIN categories AS c ON p.CategoryID = c.CategoryID
INNER JOIN suppliers AS s ON p.SupplierID = s.SupplierID
";
$products = $conn->query($productSQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Product</td>
            <td>Category</td>
            <td>Company</td>
            <td>Price</td>
        </tr>
        <?php
        while ($row = $products->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row['ProductID'] ?></td>
                <td><?= $row['ProductName'] ?></td>
                <td><?= $row['CategoryName'] ?></td>
                <td><?= $row['CompanyName'] ?></td>
                <td><?= $row['UnitPrice'] ?></td>
            </tr>
        <?php
        }
        ?>
        <tr></tr>
    </table>
</body>

</html>