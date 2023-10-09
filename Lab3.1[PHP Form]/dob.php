<!DOCTYPE HTML>

<head>
<title>Date of Birth</title>
</head>
 <body>
 <form action="dob.php" method="post">
  <fieldset>
  <legend>Date of Birth</legend>
  <input type="date" name="dob"><br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Date of Birth: <?php echo $_POST["dob"]; ?><br>

 </body>
 
 </html>