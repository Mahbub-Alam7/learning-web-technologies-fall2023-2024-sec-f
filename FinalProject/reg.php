<?php

$conn = mysqli_connect('localhost','root','','userdb');

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{
         $insert = "INSERT INTO users(username, email, password, user_type) VALUES('$username','$email','$password','$user_type')";
         mysqli_query($conn, $insert);
         header('location:success.php');
      };
   };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script defer src="script.js"></script>
</head>
<body>
    <form id="form" action:"" method="POST" align="center">
        <fieldset>
            <legend><strong>Registration</strong></legend>
            <div id="error"></div>
        <table align="center">
            <tr><div>
            <td align="right"><label for="username">Username</label></td>
            <td><input id="username" name="username" type="text"></td>
        </div></tr>
        <tr><div>
        <td align="right"><label for="password">Password</label></td>
        <td><input id="password" name="password" type="password"></td>
        </div></tr>
        <tr><div>
        <td align="right"><label for="cpassword">Confirm password</label></td>
        <td><input id="cpassword" name="cpassword" type="password"></td>
        </div></tr>
        <tr><div>
        <td align="right"><label for="email">Email</label></td>
        <td><input id="email" name="email" type="email"></td>
        </div></tr>
        <tr><div>
            <td align="right"><label for="user_type">User type</td>
        <td align="left"><select name="user_type" >
            <option>User</option>
            <option>Instructor</option>
            <option>Admin</option>
        </select></td>
        </div></tr>
        <tr><div>
            <td></td>
            <td align = "right"><input type="submit" name="submit"></input></td>
        </div></tr>
        <tr><div>
        <td align="right">Already have an account?</td>
        <td align="left"><a href="log.php">Log in</a></td>
        </div></tr>
</table>
        </fieldset>
    </form>
</body>
</html>