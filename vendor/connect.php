<?php
session_start();
try{
    $connect = new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
     $_SESSION["message"] =  "Database connection established";
}catch(PDOException $e){
    $_SESSION["message"] =  "Error:" . $e;
}


?>