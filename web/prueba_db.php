<?php
$host = "db";
$user = "root";
$pass = "carton123";
$db   = "testSQL";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>¡Conexión Exitosa!</h1>";
    echo "<p>El contenedor PHP se comunicó con el contenedor MariaDB correctamente.</p>";
} catch(PDOException $e) {
    echo "<h1>Error de Conexión</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>
