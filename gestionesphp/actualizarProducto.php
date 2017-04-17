<?php

include '../conexion.php';
$idProducto = $_POST['txtidProducto'];
$producto = $_POST['txtnommbreproducto'];
$descripcion = $_POST['txtcaracteristicas'];
$categoria = $_POST['tcat'];
$proveedor = $_POST['tprov']; 
$pCompra = $_POST['txtcompra'];
$existencias = $_POST['txtexistencia'];
$tipoImagenPro = $_FILES['txtimagen']['type'];
$nombreImagenPro = $_FILES['txtimagen']['name'];
$ruta = "../albumProductos/".$nombreImagenPro;


if($_FILES['txtimagen']['tmp_name'] == ""){

$query = "SELECT Existencias FROM tproducto WHERE idProducto=:idProducto";


}else {



}

?>