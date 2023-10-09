<!DOCTYPE HTML>

<head>
<title>Gender</title>
</head>
 <body>
 <form action="gender.php" method="post">
  <fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" value="Male">Male<br>
  <input type="radio" name="gender" value="Female">Female<br>
  <input type="radio" name="gender" value="Other">Other<br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Gender: <?php echo $_POST["gender"]; ?><br>

 </body>
 
 </html>