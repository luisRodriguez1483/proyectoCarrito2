<?php
$idCategoria = $_POST['idCategoria'];

include '../conexion.php';

try{

    $queryE = "DELETE FROM tcategoria WHERE idCategoria = :id";

    $sql = $conexion->prepare($queryE);
    $sql->bindParam(':id',$idCategoria);

    $resultado = $sql->execute();
    if($resultado == true){
        echo 1;
    }

}catch(Exception $ex){
    echo $ex->getMessage();

}

?>
