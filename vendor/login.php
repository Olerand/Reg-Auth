<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require_once "connect.php";

function redirectWithMessage($message) {
    $_SESSION["auth"] = $message;
    header('Location: /index.php');
    exit();
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

try {
    $stmt = $connect->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && md5($password, $user['password'])) {
        redirectWithMessage("Авторизация успешна!");
    } else {
        redirectWithMessage("Неверный email или пароль");
    }
} catch (PDOException $e) {
    die("Ошибка базы данных: " . $e->getMessage());
}
?>