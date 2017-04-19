<?php

include 'conexion.php';

//Traer las categorias desde la base de datos

$consulta = $conexion->prepare("SELECT * FROM tcategoria");

$consulta->execute();

$categorias = $consulta->fetchAll();

if(!$conexion){
    die();
}

$idCat=isset($_GET['idCategoria']) ? (int) ($_GET['idCategoria']) : false;

if(!$idCat){
    header('Location: index.php');
}

$statement=$conexion->prepare('SELECT * FROM tproducto WHERE idCategoria = :idCat');
$statement->execute(array(':idCat' => $idCat));

$categoria=$statement->fetchAll();

if(!$categoria){
    header('Location: index.php');
}

include 'views/listacategorias.view.php';

?>

