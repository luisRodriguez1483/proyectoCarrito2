<?php

include 'conexion.php';

//Traer las categorias desde la base de datos

$consulta = $conexion->prepare("SELECT * FROM tcategoria");

$consulta->execute();

$categorias = $consulta->fetchAll();

 $fotos_por_pagina = 6;

    $pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
    $inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

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

    $filas = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
    $filas->execute();
    $total_post = $filas->fetch()['total_filas'];

    $total_paginas = ceil($total_post / $fotos_por_pagina);

include 'views/listacategorias.view.php';

?>

