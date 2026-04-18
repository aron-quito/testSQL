<?php
$host = 'db'; // Nombre del servicio en docker-compose
$db   = 'testSQL';
$user = 'root';
$pass = 'carton123'; // Cambia esto por tu password de docker-compose
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// LÓGICA: INSERTAR CONTACTO
if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $sql = "INSERT INTO contactos (nombre, numero_celular) VALUES (?, ?)";
    $pdo->prepare($sql)->execute([$nombre, $celular]);
}

// LÓGICA: BORRAR CONTACTO
if (isset($_GET['borrar'])) {
    $id = $_GET['borrar'];
    $sql = "DELETE FROM contactos WHERE id = ?";
    $pdo->prepare($sql)->execute([$id]);
}

// LÓGICA: OBTENER TODOS LOS CONTACTOS
$stmt = $pdo->query("SELECT * FROM contactos ORDER BY fecha_registro DESC");
$contactos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Profesional - DATA ESIS</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f9; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #007bff; color: white; }
        .btn { padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn-add { background: #28a745; color: white; }
        .btn-del { background: #dc3545; color: white; font-size: 0.8em; }
        input { padding: 8px; width: 200px; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Gestión de Contactos - UNJBG</h2>
    
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre completo" required>
        <input type="text" name="celular" placeholder="Número de celular" required>
        <button type="submit" name="agregar" class="btn btn-add">Agregar Contacto</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Fecha</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactos as $c): ?>
            <tr>
                <td><?php echo $c['id']; ?></td>
                <td><?php echo htmlspecialchars($c['nombre']); ?></td>
                <td><?php echo htmlspecialchars($c['numero_celular']); ?></td>
                <td><?php echo $c['fecha_registro']; ?></td>
                <td>
                    <a href="?borrar=<?php echo $c['id']; ?>" class="btn btn-del" onclick="return confirm('¿Eliminar?')">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>