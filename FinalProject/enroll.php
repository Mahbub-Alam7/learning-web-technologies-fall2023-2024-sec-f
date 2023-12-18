<?php

$conn = mysqli_connect('localhost','root','','userdb');

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:log.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">

<p align="center"><a href="userhome.php">Go back</a></p>
<p align="center"><a href="logout.php">Logout</p>
</div>
</body>
</html>