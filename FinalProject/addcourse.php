<?php

$conn = mysqli_connect('localhost','root','','userdb');
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:log.php');
}
if(isset($_POST['submit'])){
    $cid = mysqli_real_escape_string($conn, $_POST['Course_ID']);
    $cname = mysqli_real_escape_string($conn, $_POST['Course_Name']);
    $enrollment = mysqli_real_escape_string($conn, $_POST['Enrollment']);

    $select = "SELECT * FROM course_list WHERE Course_ID = '$cid'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'Course already exists!';
    } else {
        $insert = "INSERT INTO course_list (Course_ID, Course_Name, Enrollment) VALUES ('$cid','$cname','$enrollment')";
        mysqli_query($conn, $insert);
        header('location:csuccess.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
<form action="" method="POST" align="center">
    <div>
      <label for="Course_ID">Course ID:</label>
      <input type="text" id="Course_ID" name="Course_ID">
    </div>
    <div>
      <label for="Course_Name">Course Name:</label>
      <input type="text" id="Course_Name" name="Course_Name">
    </div>
    <div>
      <label for="Enrollment">Enrollment:</label>
      <input type="text" id="Enrollment" name="Enrollment">
    </div>
    <div>
      <input type="submit" name="submit">
    </div>
    <tr><td><p><a href="adminhome.php">Go to home page</a></p></td></tr>
</form>
</div>
</body>
</html>