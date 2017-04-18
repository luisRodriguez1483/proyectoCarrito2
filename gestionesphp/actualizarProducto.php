<?php

include '../conexion.php';
$idProducto = $_POST['txtidProducto'];
$producto = $_POST['txtnommbreproducto'];
$descripcion = $_POST['txtcaracteristicas'];
$categoria = $_POST['tcat'];
$proveedor = $_POST['tprov']; 
$pCompra = $_POST['txtcompra'];
$NoExistencias = $_POST['txtexistencia'];
$tipoImagenPro = $_FILES['txtimagen']['type'];
$nombreImagenPro = $_FILES['txtimagen']['name'];
$ruta = "../albumProductos/".$nombreImagenPro;


$querySelect = "SELECT * FROM tproducto WHERE idProducto=:idPro";
$sqlS = $conexion ->prepare($querySelect);
$sqlS->execute(array('idPro'=>$idProducto));
$result = $sqlS->fetchAll();

foreach($result as $row){
$imagen = $row['Imagen'];
$existencia = $row['Existencias'];
}

if($_FILES['txtimagen']['tmp_name'] == ""){

                                        
try{

$queryUpdate = "UPDATE tproducto SET 
Producto=:producto,Descripcion=:descripcion,
Existencias=:existencia,Precio=:precio,PrecioVenta=:pventa,idCategoria=:idCate,idProveedor=:idProve WHERE idProducto=:idPro";

$nuevaExistencia = $existencia+$NoExistencias;
$pVenta = $pCompra*1.25;

$sqlU = $conexion->prepare($queryUpdate);

$sqlU->bindParam(':idPro',$idProducto);
$sqlU->bindParam(':producto',$producto);
$sqlU->bindParam(':descripcion',$descripcion);
$sqlU->bindParam(':existencia',$nuevaExistencia);
$sqlU->bindParam(':precio',$pCompra);
$sqlU->bindParam(':pventa',$pVenta);
$sqlU->bindParam(':idCate',$categoria);
$sqlU->bindParam(':idProve',$proveedor);

$resultado = $sqlU->execute();
if($resultado == true){
echo 1;
}
}catch(Exception $ex){
echo "ERRO AL ACTUALIZAR SIN IMAGEN ".$ex->getMessage();
}

}else {

if($tipoImagenPro == "image/jpeg" || $tipoImagenPro == "image/png" || $tipoImagenPro == "image/gif"){
if(move_uploaded_file($_FILES['txtimagen']['tmp_name'],$ruta) == true){
        try{
unlink("../albumProductos/$imagen");

$queryUpdate = "UPDATE tproducto SET 
Producto=:producto,Imagen=:imagen,Descripcion=:descripcion,
Existencias=:existencia,Precio=:precio,PrecioVenta=:pventa,idCategoria=:idCate,idProveedor=:idProve WHERE idProducto=:idPro";

$nuevaExistencia = $existencia+$NoExistencias;
$pVenta = $pCompra*1.25;

$sqlU = $conexion->prepare($queryUpdate);
$sqlU->bindParam(':idPro',$idProducto);
$sqlU->bindParam(':producto',$producto);
$sqlU->bindParam(':imagen',$nombreImagenPro);
$sqlU->bindParam(':descripcion',$descripcion);
$sqlU->bindParam(':existencia',$nuevaExistencia);
$sqlU->bindParam(':precio',$pCompra);
$sqlU->bindParam(':pventa',$pVenta);
$sqlU->bindParam(':idCate',$categoria);
$sqlU->bindParam(':idProve',$proveedor);

$resultado = $sqlU->execute();

if($resultado == true){
echo 1;
}


}catch(Exception $ex){
echo "ERROR ACTUALIZAR PRODUCTO CON IMAGEN ".$ex->getMessage();
}


}else{
    echo "ERROR AL SUBIR EL FICHERO";
}

}else{

    echo 2;
}

}

?>