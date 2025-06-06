<?php
    session_start();
    require_once "connect.php";
    function displayMessageToForm($string){
        $_SESSION["auth"] = $string;
        header('Location: /log.php');
        exit();
    }
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    try{
        $result = $connect->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            displayMessageToForm("User is avaibled!");
        } else {
            displayMessageToForm("Пользователь не найден");
            }
    }
    catch(PDOException $e){
        echo "$e";
    }

?>  