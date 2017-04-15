<?php

$id = $_POST['id'];
$categoria = $_POST['categoria'];
include "../conexion.php";

try{

    $queryU = "UPDATE tcategoria SET Categoria=:categoria WHERE idCategoria=:id";
    $sql = $conexion->prepare($queryU);

    $sql->bindParam(':id',$id);
    $sql->bindParam(':categoria',$categoria);

    $resultado = $sql->execute();

    if($resultado == true){
        echo 1;
    }


}catch(Exception $ex){
    echo $ex->getMessage();
}

?>
