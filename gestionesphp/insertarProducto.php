<?php
include '../conexion.php';
$producto = $_POST['txtnommbreproducto'];
$caracteristicas = $_POST['txtcaracteristicas'];
$categoria = $_POST['tcat'];
$proveedor = $_POST['tprov']; 
$pCompra = $_POST['txtcompra'];
$pVenta = $_POST['txtexistencia'];
$tipoImagenPro = $_FILES['txtimagen']['type'];
$nombreImagenPro = $_FILES['txtimagen']['name'];
$ruta = "../albumProductos/".$nombreImagenPro;

if($_FILES['txtimagen']['tmp_name']!=""){
if($tipoImagenPro == "image/jpeg" || $tipoImagenPro == "image/png"){
if(move_uploaded_file($_FILES['txtimagen']['tmp_name'],$ruta) == true){
try{
$queryInsert = "INSERT INTO tproducto(Producto,Imagen,Descripcion,Existencias,Precio,idCategoria,idProveedor)
 VALUES(:producto,:imagen,:descripcion,:existencias,:precio,:idCate,:idProve)";

}catch(Exception $ex){
echo 'ERROR AL INSERTAR '.$ex->getMessage();
}

}else {
    echo 'Error al subir el archivo';
}

}else {

    echo "Tipo de archivo no permitido ";
}
}else{
echo 'No selecciono una imagen';

}
//echo $producto.' '.$caracteristicas.' '.$categoria.' '.$proveedor.' '.$pCompra.' '.$pVenta;

/*foreach($imagenProducto as $llave=>$valor){
    echo $llave.': '.$valor.'<br>';
}*/


?>