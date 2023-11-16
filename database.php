<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'Acc12345';
$base_datos = 'login';
$conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos)

    or die("Error en la conexión");

?>