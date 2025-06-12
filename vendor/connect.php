<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

try {
     $connect = new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
    // $connect = new PDO(
    //     "mysql:host=sql204.hostinggem.ru;port=3306;dbname=gnioo_39196530_test;charset=utf8",
    //     "gnioo_39196530",
    //     "m2i0sh0a6"
    // );

    $message = "Database connection established";
} catch (PDOException $e) {
    $message = "Error: " . $e->getMessage();
}
?>

<script>
    alert(<?php echo json_encode($message); ?>);
</script>
