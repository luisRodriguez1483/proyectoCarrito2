<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
    <title>Contactanos</title>
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
            <li class="col-1"><a href="index.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-1"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="contacto.php"><span class="icon-mail5">Contacto</span></a></li>
            <li class="col-2"><input type="text" name="buscador" value="" placeholder="Buscar:"></li>
        </ul>
    </header>
    <article class="formulario">
        <h1>Formulario de Contacto</h1>
        <form action="" methood="POST">
        <span class="icon-at2 mail"><label for="correo">E-mail:</label></span>
        <input type="text" name="correo" placeholder"Aqui va tu correo electrónico" /><br><br><br>
        <span class="icon-comment3 mail"><label for="asunto">Asunto:</label></span>
        <input type="text" name="asunto" placeholder"Asunto" /><br><br><br>
        <span class="icon-envelop mail"><label for="mensaje">Mensaje:</label></span><br>
        <textarea rows="" cols=""></textarea><br><br><br>
        <input type="submit" name="btnCorreo" value="Enviar Correo" class="submit">
        </form>
    </article>
    </div>
</body>
</html>