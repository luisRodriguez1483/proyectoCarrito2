<?php
include '../conexion.php';

$producto = $_POST['txtnommbreproducto'];
$descripcion = $_POST['txtcaracteristicas'];
$categoria = $_POST['tcat'];
$proveedor = $_POST['tprov']; 
$pCompra = $_POST['txtcompra'];
$existencias = $_POST['txtexistencia'];
$tipoImagenPro = $_FILES['txtimagen']['type'];
$nombreImagenPro = $_FILES['txtimagen']['name'];
$ruta = "../albumProductos/".$nombreImagenPro;

if($_FILES['txtimagen']['tmp_name']!=""){
if($tipoImagenPro == "image/jpeg" || $tipoImagenPro == "image/png"){
if(move_uploaded_file($_FILES['txtimagen']['tmp_name'],$ruta) == true){
try{
    
    $pVenta = $pCompra*1.25;
    
$queryInsert = "INSERT INTO tproducto(Producto,Imagen,Descripcion,Existencias,Precio,PrecioVenta,idCategoria,idProveedor)
 VALUES(:producto,:imagen,:descripcion,:existencias,:precio,:precioVenta,:idCate,:idProve)";
    
    $sql = $conexion->prepare($queryInsert);
    
    $sql->bindParam(':producto',$producto);
    $sql->bindParam(':imagen',$nombreImagenPro);
    $sql->bindParam(':descripcion',$descripcion);
    $sql->bindParam(':existencias',$existencias);
    $sql->bindParam(':precio',$pCompra);
    $sql->bindParam(':precioVenta',$pVenta);
    $sql->bindParam(':idCate',$categoria);
    $sql->bindParam(':idProve',$proveedor);

$resultado =  $sql->execute();

if($resultado == true){
echo 4;
}

}catch(Exception $ex){
echo 'ERROR AL INSERTAR '.$ex->getMessage();
}

}else {
    echo 3;
}

}else {

    echo 2;
}
}else{
    
echo 1;

}
//echo $producto.' '.$caracteristicas.' '.$categoria.' '.$proveedor.' '.$pCompra.' '.$pVenta;

/*foreach($imagenProducto as $llave=>$valor){
    echo $llave.': '.$valor.'<br>';
}*/


?>
