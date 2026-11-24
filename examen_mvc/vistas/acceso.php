<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <tittle>Acceso de login</tittle>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <?php if ($error != "") { ?>
        <p class="error"><?= $error ?></p>
    <?php } ?>
    <form method="post">
        <label>Usuario</label>
        <input type="text" name="usuario" required>
        <label>Contraseña</label>
        <input type="password" name="clave" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
