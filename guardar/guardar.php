<?php

require ('../conex/conex.php');

$Accion = $_POST['Accion'];
$id = $_POST['id'];

if($Accion == 'guardar'){    
    $misbienes = $obj_conexion->query("INSERT INTO misbienes(Id,id_bienes) VALUES('1','$id') ");
    if($misbienes == false){
        echo 'false';
    } else {
        echo 'true';
    }
}

if($Accion == 'eliminar'){    
    $misbienes = $obj_conexion->query("DELETE FROM misbienes WHERE id_bienes = '$id' ");
    if($misbienes == false){
        echo 'false';
    } else {
        echo 'true';
    }
} 