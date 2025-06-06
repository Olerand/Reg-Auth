<?php
    session_start();
    require_once "connect.php";

    $fullName = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    function displayMessageToForm($string){
        $_SESSION["message"] = $string;
        header('Location: /reg.php');
        exit();
    }

    switch(true){
        case ($email == "" || $password == "" || $fullName == ""):
            displayMessageToForm("You have not filled out the registration form completely.");
        case (strpos($email,"@")=== false):
            displayMessageToForm("You dont enter a mail with @");
        case (!preg_match('/[A-Z]/', $password)):
            displayMessageToForm("You password should enter a uppercase chars");
        case (!preg_match('/[0-9]/', $password)):
           displayMessageToForm("You password should enter a numbers");
        default:
            $password = md5($password);
            $connect->exec("INSERT INTO `users` (`id`,`full_name`, `email`, `password`) VALUES (NULL,'$fullName','$email', '$password')");
            displayMessageToForm("Registration completed!");
    }


?>