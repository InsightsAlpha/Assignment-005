<?php
$servername = "localhost";
$username = "root";
$password = "RedGear";
$dbname = "php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
<form method="post" action="">
    ID: <input type="text" name="id"><br>
    <input type="submit" value="Delete">
</form>
``` ### (1) HTML Table of Product Description
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description Table</title>
</head>
<body>
    <h2>Product Description</h2>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Product 1</td>
            <td>Description of Product 1</td>
            <td>$10</td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>Description of Product 2</td>
            <td>$20</td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>Description of Product 3</td>
            <td>$30</td>
        </tr>
    </table>
</body>
</html>