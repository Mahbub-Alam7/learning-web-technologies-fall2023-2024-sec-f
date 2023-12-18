<?php

$conn = mysqli_connect('localhost','root','','userdb');
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:log.php');
}
$sql = "select * from course_list";
$result = mysqli_query($conn, $sql);
    
?>

<!DOCTYPE html>
<head>
    <title>
        Available courses
</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="form-container">
<table border=1 align="center">
    <tr>
        <td>Course_ID</td>
        <td>Course_Name</td>
        <td>Enrollment</td>
    </tr>
    <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$data['Course_ID']?></td>
        <td><?=$data['Course_Name']?></td>
        <td><?=$data['Enrollment']?></td>
    </tr>
  <?php  } ?>
</table><br>
<p align="center"><a href="userhome.php">Go back</a></p>
</div>
    </body>
    </html>