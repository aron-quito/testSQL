<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="demoprueba"/>
    <title>formulario de info personal</title>
    <link rel="stylesheet" href="ficha.css">
</head>

<body>

    <form action="procesar.php" method="POST" class="formulario-registro">
        <h1>Datos de Contacto</h1>
        <div class="fila-superior">
        <div class="campo">
            <label>Nombre *</label>
            <input type="text" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="campo">
            <label>Apellidos *</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
        </div>
        <div class="campo">
            <label>Celular *</label>
            <input type="tel" name="celular" placeholder="Celular" required>
        </div>
    </div>

    <div class="campo-correo">
        <label>Correo *</label>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
    </div>

</form>
</body>
</html>