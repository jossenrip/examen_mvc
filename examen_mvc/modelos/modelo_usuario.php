<?php
function validar_usuario($usuario, $clave)
{
    $usuarios = [
        "admin" => "1234",
        "profesor1" => "1234",
        "profesor2" => "1234",
        "profesor3" => "1234",
        "profesor4" => "1234"
    ];
    return isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave;
}
?>