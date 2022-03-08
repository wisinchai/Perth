<?php
    session_start();
    include('server.php');
    $errors = array();
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);
    }
    if(empty($username)){
        array_push($errors , "Username is required");
        
    }
?>