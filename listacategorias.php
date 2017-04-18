<?php

include 'conexion.php';

if(!$conexion){
    die();
}

$idCat=isset($_GET['idCategoria']) ? (int) ($_GET['idCategoria']) : false;

if(!$idCat){
    header('Location: index.php');
}

$state

?>

