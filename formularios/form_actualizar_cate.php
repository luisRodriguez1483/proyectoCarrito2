<?php
include '../conexion.php';
$idCategoria = $_POST['idCategoria'];


try{

    $query = "SELECT Categoria FROM tcategoria WHERE idCategoria=:id";

   $sql = $conexion->prepare($query);
    $sql->execute(array('id'=>$idCategoria));
    $rs = $sql->fetchAll();

    foreach($rs as $row){

?>

<form method="post" action="categoria.php" class="formulario">
    <input type="hidden" id="idCate" value="<?php echo $idCategoria ?>"/>
    <div>
        <label class="formulario">Categoría: </label>
        <input type="text" required id="txtcategoria" class="caja" value="<?php echo $row['Categoria']?>" />
    </div>
    <div>
        <input type="button" value="Enviar" class="btn" id="btnActCategoria"/>
    </div>

</form>


<?php

             }
}catch(Exception $ex){
    echo $ex->getMessage();
}


?>
