<?php
function obtener_alumnos($conexion)
{
    $resultado = $conexion->query("SELECT * FROM notas");
    return $resultado->fetch_all(MYSQLI_ASSOC);
}

function obtener_alumno($conexion, $id)
{
    $consulta = $conexion->prepare("SELECT * FROM notas WHERE id = ?");
    $consulta->bind_param("i", $id);
    $consulta->execute();
    return $consulta->get_result()->fetch_assoc();
}

function guardar_nota($conexion, $columna, $nota, $id)
{
    $consulta = $conexion->prepare("UPDATE notas SET $columna = ? WHERE id = ?");
    $consulta->bind_param("di", $nota, $id);
    return $consulta->execute();
}
?>
