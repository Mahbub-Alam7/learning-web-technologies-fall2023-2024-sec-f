<?php

$conn = mysqli_connect('localhost','root','','userdb');

session_start();
session_unset();
session_destroy();

header('location:log.php');

?>