<?php
require_once "modelos/modelo_usuario.php";

function iniciar_sesion(){
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        if (validar_usuario($usuario, $clave)) {
            $_SESSION["username"] = $usuario;
            header("Location: listado.php");
            exit;
        }
        $error = "Usuario o contraseña incorrectos";
    }
    require "vistas/acceso.php";
}

function cerrar_sesion(){
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
