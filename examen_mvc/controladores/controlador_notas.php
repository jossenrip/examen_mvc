<?php
require_once "config/conexion.php";
require_once "modelos/modelo_nota.php";

function mostrar_listado()
{
    global $conexion;
    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit;
    }
    $usuario = $_SESSION["username"];
    $alumnos = obtener_alumnos($conexion);
    require "vistas/listado.php";
}

function mostrar_formulario()
{
    global $conexion;
    if (!isset($_SESSION["username"])) {
        echo "Acceso denegado";
        exit;
    }
    $usuario = $_SESSION["username"];
    $id = $_GET["id"];
    $columna = $_GET["columna"];
    if ($usuario != "admin" && $usuario != $columna) {
        echo "Acceso denegado";
        exit;
    }
    $alumno = obtener_alumno($conexion, $id);
    require "vistas/poner_nota.php";
}

function guardar()
{
    global $conexion;
    if (!isset($_SESSION["username"])) {
        echo "Acceso denegado";
        exit;
    }
    $usuario = $_SESSION["username"];
    $id = $_POST["id"];
    $columna = $_POST["columna"];
    $nota = $_POST["nota"];

    $columnas = ["profesor1", "profesor2", "profesor3", "profesor4"];
    if (!in_array($columna, $columnas) || ($usuario != "admin" && $usuario != $columna)) {
        echo "Acceso denegado";
        exit;
    }
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        echo "La nota debe estar entre 0 y 10. <a href='listado.php'>Volver</a>";
        exit;
    }
    guardar_nota($conexion, $columna, $nota, $id);
    header("Location: listado.php");
    exit;
}
?>
