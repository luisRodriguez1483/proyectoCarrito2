<?php

include '../conexion.php';

$idProveedor = $_POST['idProveedor'];

try{

    $query = "DELETE FROM tproveedor WHERE idProveedor = :id";
    $sql = $conexion->prepare($query);
    $sql->bindParam(':id',$idProveedor);
   $rs =  $sql->execute();

    if($rs == true){
        echo 1;
    }


}catch(Exception $e){
    $e->getMessage();
}

?>
