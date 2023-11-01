<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
        echo "null username or password!";

    }else if ($username == $_SESSION['username'] && $password == $_SESSION['password']){
        //$_SESSION['flag'] = 'true';
        setcookie('flag', 'true', time()+3600, '/');
        header('location: home.php');
    }else{
        echo "invalid user!";
    }
?>