<?php

$conn = mysqli_connect('localhost','root','','userdb');

session_start();

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    
    $password = md5($_POST['password']);
    

    $select = " SELECT * FROM users WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin'){

         $_SESSION['admin_name'] = $row['username'];
         header('location:adminhome.php');

      }elseif($row['user_type'] == 'User'){

         $_SESSION['user_name'] = $row['username'];
         header('location:userhome.php');

      }elseif($row['user_type'] == 'Instructor'){

        $_SESSION['instructor_name'] = $row['username'];
        header('location:inshome.php');

     }
     
   }else{
      $error[] = 'Incorrect username or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

</head>
<body>
   
<div>

   <form action="" method="post" align="center">
    <fieldset>
      <legend><strong>Login</strong></legend>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <table align="center">
      <tr><td align="right">
      <label for="username">Username</label></td>
      <td><input type="text" name="username" required></td></tr>
      <tr><td align="right">
      <label for="password">Password</label></td>
      <td><input type="password" name="password" required></td></tr>
      <tr><td></td><td align="">
      <input type="submit" name="submit"></td></tr>
      <tr><td></td><td><p>Don't have an account? <a href="reg.php">Sign Up</a></p></td>
    </tr>
    </table>
    </fieldset>
   </form>

</div>

</body>
</html>