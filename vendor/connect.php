<?php
try{
    $connect = new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
     echo "Database connection established";
}catch(PDOException $e){
    echo "Error:" . $e;
}


?>