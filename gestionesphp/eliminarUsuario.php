<?php

include '../conexion.php';

$id = $_POST["id"];
try {
    
    $query = "DELETE FROM tusuarios WHERE idUsuario=:id";
    
    $sql = $conexion->prepare($query);
    $sql->bindParam(":id",$id);
    
    $rs = $sql->execute();
    
    if($rs == true){
        echo 1;
    }
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}


