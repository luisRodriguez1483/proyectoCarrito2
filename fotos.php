<?php

require 'conexion.php';

$conexion=conexion('proyecto', 'root', '');

if(!$conexion){
    die();
}

$id=isset($_GET['idImagen']) ? (int) ($_GET['idImagen']) : false;

if(!$id){
    header('Location: index.php');
}

$statement=$conexion->prepare('SELECT * FROM timagen WHERE idImagen = :id');
$statement->execute(array(':id' => $id));

$foto=$statement->fetch();

if(!$foto){
    header('Location: index.php');
}

require 'views/fotos.view.php';

?>