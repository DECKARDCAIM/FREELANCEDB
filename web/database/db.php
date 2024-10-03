<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=portafolio", "root", "CAllofduty123@%");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>
