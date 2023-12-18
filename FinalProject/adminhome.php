<?php

$conn = mysqli_connect('localhost','root','','userdb');

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:log.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <center>
    <font face="times new roman" size="10">Admin Dashboard</font>
    <br><br><br>
  
    <table>
            <tr><td><p align="center"><a href="users.php">View all users</a></p></td></tr>
            <tr><td><p align="center"><a href="addcourse.php">Add a course</a></p></td></tr>
            <tr><td><p align="center"><a href="checkcourse2.php">Available course list</p></td></tr>
            <tr align="right"><td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></td></tr>
        </table>
    </center>
    </div>
</body>
</html>