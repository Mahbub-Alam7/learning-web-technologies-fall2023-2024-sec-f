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
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <form><fieldset>
<h3 align="center">Welcome User!</h3>
<table align="center">
<tr><td><p align="center"><a href="enroll.php">Enroll</a></p></td></tr>
<tr><td><p align="center"><a href="checkcourse.php">Available course list</p></td></tr>
<tr><td><p align="right"><a href="logout.php">Logout</p></td></tr>
</table>
</form></fieldset>
</div>
</body>
</html>