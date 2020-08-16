<?php 

/*
    Archivo creado para la conexion del proyecto con la BD
*/

$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "root"; // El usuario que acabamos de crear en la base de datos 
$contrasena = ""; // La contraseña del usuario que utilizaremos 
$BD = "Intelcost_bienes"; // El nombre de la base de datos 

$obj_conexion = mysqli_connect($servidor, $usuario, $contrasena, $BD);