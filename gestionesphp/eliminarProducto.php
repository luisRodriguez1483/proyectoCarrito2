<?php
include '../conexion.php';


$idProducto = $_POST['id'];
try{
$query = "SELECT Imagen FROM tproducto WHERE idProducto=:id";

$s = $conexion->prepare($query);

$s->execute(array('id'=>$idProducto));
$rs = $s->fetchAll();
foreach($rs as $row){
$imagen = $row['Imagen'];
}

unlink("../albumProductos/$imagen");

try{
$delete = "DELETE FROM tproducto WHERE idProducto=:id";
$d = $conexion->prepare($delete);
 $d->bindParam(':id',$idProducto);
$resultado = $d->execute();
if($resultado == true){
echo 1;
}


}catch(Exception $ex2){
echo "ERRRO AL ELIMINAR PRODUCTO ".$ex2->getMessage();
}


}catch(Exception $ex){
echo "ERROR EN LA CONSULTA ".$ex->getMessage();
}

?>