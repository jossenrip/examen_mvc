<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css">
    <tittle>Listado</tittle>
</head>
<body>
    <h1>Usuario: <?= $usuario ?></h1>
    <a href="salir.php">Cerrar sesión</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <?php if ($usuario == "admin") { ?>
                <th>Profesor1</th>
                <th>Profesor2</th>
                <th>Profesor3</th>
                <th>Profesor4</th>
            <?php } else { ?>
                <th>Nota</th>
            <?php } ?>
        </tr>
        <?php foreach ($alumnos as $alumno) { ?>
            <tr>
                <td><?= $alumno["id"] ?></td>
                <td><?= $alumno["nombre"] ?></td>
                <td><?= $alumno["apellido1"] ?></td>
                <td><?= $alumno["apellido2"] ?></td>
                <?php if ($usuario == "admin") { ?>
                    <?php foreach (["profesor1", "profesor2", "profesor3", "profesor4"] as $columna) { ?>
                        <td>
                            <?= $alumno[$columna] ?>
                            <a href="poner_nota.php?id=<?= $alumno["id"] ?>&columna=<?= $columna ?>">Editar</a>
                        </td>
                    <?php } ?>
                <?php } else { ?>
                    <td>
                        <?= $alumno[$usuario] ?>
                        <a href="poner_nota.php?id=<?= $alumno["id"] ?>&columna=<?= $usuario ?>">Editar</a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
