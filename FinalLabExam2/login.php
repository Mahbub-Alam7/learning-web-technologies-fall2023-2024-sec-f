<?php
    require_once('userModel.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
    
        echo "Enter username and password!";
    
    }else{
        $status = login($username, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: home.html');
        }else{
            echo "Invalid user!";
        }
    }
?>