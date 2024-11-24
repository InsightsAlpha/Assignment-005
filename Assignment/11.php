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
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', age='$age', course='$course' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
<form method="post" action="">
    ID: <input type="text" name="id"><br>
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    Course: <input type="text" name="course"><br>
    <input type="submit" value="Update">
</form>