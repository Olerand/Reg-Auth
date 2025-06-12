<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

try {
     $connect = new PDO("mysql:host=localhost;port=3306;dbname=test","root","");


    $message = "Database connection established";
} catch (PDOException $e) {
    $message = "Error: " . $e->getMessage();
}
?>

<script>
    alert(<?php echo json_encode($message); ?>);
</script>
