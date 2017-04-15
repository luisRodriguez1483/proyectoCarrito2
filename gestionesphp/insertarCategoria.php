<?php

include '../conexion.php';
$categoria = $_POST['categoria'];

try{
    $insertarCate = "INSERT INTO tcategoria (Categoria) VALUES(:categoria)";

    $sql = $conexion->prepare($insertarCate);
    $sql->bindParam(':categoria',$categoria);

    $resultado = $sql->execute();

    if($resultado == true){
        echo 1;
    }

}catch(Exception $ex){
    echo $ex->getMessage();
}

?>
