<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styleindex.css" rel="stylesheet">

</head>

<body>
    <p class="furniture">furniture<b>store</b></p>
    <ul class="cabecera">
        <li class="col-2">
            <a href=""></a>
        </li>
        <li class="col-2 col-m-12"><a href="">Envíos y Devoluciones</a></li>
        <li class="col-2 col-m-12"><a href="">Búsqueda Avanzada</a></li>
        <li class="col-2 col-m-12"><a href="">Crear una Cuenta</a></li>
        <li class="col-2 col-m-12"><a href="login.php">Iniciar sesión</a></li>
        <li class="carrito col-2 col-m-12"><a href="">Carrito:</a></li>
    </ul>
    <header class="menu">
        <ul>
            <li class="col-1"><a href="">Nuevo</a></li>
            <li class="col-2"><a href="">Destacados</a></li>
            <li class="col-2"><a href="">Más vendidos</a></li>
            <li class="col-1"><a href="">Ofertas</a></li>
            <li class="col-2"><a href="">Comentarios</a></li>
            <li class="col-2"><a href="">Contacto</a></li>
            <li class="col-2"><input type="text" name="buscador" value="" placeholder="Buscar:"></li>
        </ul>
    </header>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/img1.jpg" alt="" style="width: 100%">
            <div class="text">Imagén Uno</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/img2.jpg" alt="" style="width: 100%">
            <div class="text">Imagén Dos</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/img3.jpg" alt="" style="width: 100%">
            <div class="text">Imagén Tres</div>
        </div>
    </div>
    <br>
    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <nav class="categorias col-3 col-m-6">
        <ul>
            <li><a href="">Categoría 1</a></li>
            <li><a href="">Categoría 2</a></li>
            <li><a href="">Categoría 3</a></li>
            <li><a href="">Categoría 4</a></li>
            <li><a href="">Categoría 5</a></li>
        </ul>
    </nav>
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
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

</html>