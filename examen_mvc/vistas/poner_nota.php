<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <tittle>Poner notas</tittle>
</head>
<body>
    <h1>Editar nota del Alumno</h1>
    <form method="post" action="guardar_nota.php">
        <input type="hidden" name="id" value="<?= $alumno["id"] ?>">
        <input type="hidden" name="columna" value="<?= $columna ?>">
        <label>Nota (<?= $columna ?>)</label>
        <input type="number" name="nota" min="0" max="10" value="<?= $alumno[$columna] ?>" required>
        <button type="submit">Guardar</button>
        <a href="listado.php">Cancelar</a>
    </form>
</body>
</html>
