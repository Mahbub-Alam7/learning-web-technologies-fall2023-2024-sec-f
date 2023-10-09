<!DOCTYPE HTML>

<head>
<title>Degree</title>
</head>
 <body>
 <form action="degree.php" method="post">
  <fieldset>
  <legend>Degree</legend>
  <input type="checkbox" name="degree" value="SSC">SSC<br>
  <input type="checkbox" name="degree" value="HSC">HSC<br>
  <input type="checkbox" name="degree" value="BSc">BSc<br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Degree: <?php echo $_POST["degree"]; ?><br>

 </body>
 
 </html>