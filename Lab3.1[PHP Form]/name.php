<!DOCTYPE HTML>

<head>
<title>Name</title>
</head>
 <body>
 <form action="name.php" method="post">
  <fieldset>
  <legend>Name</legend>
  <input type="text" name="name"><br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Your name: <?php echo $_POST["name"]; ?><br>

 </body>
 
 </html>