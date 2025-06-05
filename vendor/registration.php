<?php
    session_start();
    require_once "connect.php";

    $fullName = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(strpos($email,"@")!== false){

    }else{
        $_SESSION["message"] = "You dont enter a mail with @";
        header('Location: ./registration.php');
    }

?>