<?php


//session_start();
//if(empty($_SESSION['idUsuario']) && empty($_SESSION['Tipo'])){
    include 'conexion.php';
    
//}else{

//header("Location: formularios/form_cliente.php");
//}

 $fotos_por_pagina = 6;

    $pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
    $inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

    $conexion = conexion('proyecto', 'root', '');

    if (!$conexion) {
        die();
    }

    $statement = $conexion->prepare("
        SELECT SQL_CALC_FOUND_ROWS * FROM timagen LIMIT $inicio, $fotos_por_pagina
    ");

    $statement->execute();
    $fotos = $statement->fetchAll();

    if (!$fotos) {
        header('Location: index.php');
    }

    $statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
    $statement->execute();
    $total_post = $statement->fetch()['total_filas'];

    $total_paginas = ceil($total_post / $fotos_por_pagina);

    include 'views/index.view.php';



?>
