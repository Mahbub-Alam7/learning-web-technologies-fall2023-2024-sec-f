<!DOCTYPE HTML>

<head>
<title>Email</title>
</head>
 <body>
 <form action="email.php" method="post">
  <fieldset>
  <legend>Email</legend>
  <input type="email" name="email"><br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Email: <?php echo $_POST["email"]; ?><br>

 </body>
 
 </html>