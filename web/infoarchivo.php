<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="demoprueba"/>
    <title>formulario de info personal</title>
</head>

<body>
    <div id="info">
        <form id="ejemplo" action="procesa_formulario.php" target="_blank" method="post">
            <h1>Registrar Ficha</h1>
            <p>Nombre: <input name='nombre'></p>
            <p>Apellidos: <input name='apellidos'></p>
            <input type="submit" name="enviar" value="Enviar" />
        </form>
    </div>
</body>
</html>