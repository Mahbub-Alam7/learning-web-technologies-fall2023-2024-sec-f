<?php
 $dbhost = "localhost";
 $dbname = "labExam";
 $dbuser = "root";
 $dbpass = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $productname = $_POST['productname'];

    $id = mysqli_real_escape_string($conn, $id);
    $productname = mysqli_real_escape_string($conn, $productname);

    $sql = "INSERT INTO products (id, productname) VALUES ('$id', '$productname')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proudcts</title>
</head>
<body>
</body>
</html>
