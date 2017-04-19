<?php

require 'conexion.php';

if(!$conexion){
    die();
}

$id=isset($_GET['idProducto']) ? (int) ($_GET['idProducto']) : false;

if(!$id){
    header('Location: index.php');
}

$statement=$conexion->prepare('SELECT * FROM tproducto WHERE idProducto = :id');
$statement->execute(array(':id' => $id));

$foto=$statement->fetch();

if(!$foto){
    header('Location: index.php');
}

require 'views/fotos.view.cliente.php';

?>