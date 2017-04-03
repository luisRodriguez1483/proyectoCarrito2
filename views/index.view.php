<?php

 $fotos_por_pagina = 16;

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
</head>

<body>
<div class="contenedor">
    <p class="furniture">furniture<b>store</b></p>
    <ul class="cabecera">
        <li class="col-2">
            <a href=""></a>
        </li>
        <li class="col-2 col-m-12"><a href="">Envíos y Devoluciones</a></li>
        <li class="col-2 col-m-12"><a href="">Búsqueda Avanzada</a></li>
        <li class="col-2 col-m-12"><a href="formularios/form_cliente.php">Crear una Cuenta</a></li>
        <li class="col-2 col-m-12"><a href="login.php">Iniciar sesión</a></li>
        <li class="carrito col-2 col-m-12"><a href="">Carrito:</a></li>
    </ul>
    <header class="menu">
        <ul>
            <li class="col-2"><a href="index.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-2"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="contacto.php"><span class="icon-mail5">Contacto</span></a></li>
        </ul>
    </header>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/img1.png" alt="" style="width:100%;">
            <div class="text">Imagén Uno</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/img2.png" alt="" style="width:100%;">
            <div class="text">Imagén Dos</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/img3.png" alt="" style="width:100%;">
            <div class="text">Imagén Tres</div>
        </div>
    </div>
    <br>
    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="catprod">
        <nav class="categorias col-3 col-m-4">
        <ul>
            <li><a href="">Categoría 1</a></li>
            <li><a href="">Categoría 2</a></li>
            <li ><a href="">Categoría 3</a></li>
            <li><a href="">Categoría 4</a></li>
            <li><a href="">Categoría 5</a></li>
        </ul>
    </nav> 
    <article class="imagenes col-9 col-m-8">
        <?php foreach($fotos as $foto):?>
        <div class="imagen1 col-4 col-m-6"> 
            <p><?php echo "<h2>".$foto['Nombre']."</h2>"; ?></p>
            <a href="fotos.php?id=<?php echo $foto['idImagen']; ?>">
                <img src="images/bd/<?php echo $foto['Imagen'] ?>" alt="<?php echo $foto['Descripcion'] ?>">
            </a>
            <p><?php echo $foto['Descripcion']; ?></p>
            </div>
        <?php endforeach;?>
        
    </article>
    <div class="paginacion imagenes">
        <a href="#" class="izquierda col-6 col-m-6"><span class="icon-arrow-left-alt1"></span> Página Anterior</a>
        <a href="#" class="derecha col-6 col-m-6">Página Siguiente <span class="icon-arrow-right-alt1"></span></a>
        </div>
    </div>
    <footer>
        <h1>FOOTER</h1>
    </footer>
    </div> 
</body>
<script type="text/javascript">
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>

</html>
