<?php

$conn = mysqli_connect('localhost','root','','userdb');
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:log.php');}
$sql = "select * from users";
$result = mysqli_query($conn, $sql);
    
?>

<!DOCTYPE html>
<head>
    <title>
        User list
</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="form-container">
<table border=1>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>
    </tr>
    <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$data['ID']?></td>
        <td><?=$data['username']?></td>
        <td><?=$data['password']?></td>
        <td><?=$data['email']?></td>
    </tr>
  <?php  } ?>
</table><br>
<p align="center"><a href="adminhome.php">Go back</a></p>
</div>
    </body>
    </html>