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
            <?php foreach($categorias as $categoria): ?>
            <li><a href="#"><?php echo $categoria['Categoria']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav> 
    <article class="imagenes col-9 col-m-8">
        <?php foreach($fotos as $foto):?>
        <div class="imagen1 col-4 col-m-6"> 
            <h2><?php echo $foto['Producto']; ?></h2>
            <a href="fotos.php?idProducto=<?php echo $foto['idProducto']; ?>">
                <img src="albumProductos/<?php echo $foto['Imagen'] ?>" alt="<?php echo $foto['Descripcion'] ?>">
            </a>
            <p><b>$: </b><?php echo $foto['Precio']; ?></p>
            <span class="icon-shopping-cart"></span><input type="submit" value="Comprar">
            </div>
        <?php endforeach;?> 
    </article>
    <div class="paginacion imagenes">
    <?php if($pagina_actual > 1): ?>
        <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda col-6 col-m-6"><span class="icon-arrow-left-alt1"></span> Página Anterior</a>
    <?php endif ?>
    <?php if($total_paginas != $pagina_actual): ?>
        <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha col-6 col-m-6">Página Siguiente <span class="icon-arrow-right-alt1"></span></a>
    <?php endif ?>  
        </div>
    </div>
    </div> 
    <footer>
        <div class="f2 col-6">
            <span class="facebook icon-facebook22"><a href="https://www.facebook.com">Visitanos en Facebook</a></span><br><br>
            <span class="twitter icon-twitter3"><a href="https://www.twitter.com">Siguenos en Twitter</a></span><br><br>
            <span class="youtube icon-youtube22"><a href="https://www.youtube.com">Suscribete a nuestro canal</a></span><br><br>
        </div>
        <div class="f3 col-6">
            <span class="whats icon-whatsapp2">(55)29082180</span><br><br>
            <span class="phone icon-phone3">(55)50482010</span>
        </div>
    </footer>
</body>
<!--<script type="text/javascript" href="js/jsindex.js"></script>-->
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
