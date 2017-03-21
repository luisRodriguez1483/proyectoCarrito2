<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
    <title>Document</title>
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
        <li class="col-2 col-m-12"><a href="">Iniciar sesión</a></li>
        <li class="carrito col-2 col-m-12"><a href="">Carrito:</a></li>
    </ul>
    <header class="menu">
        <ul>
            <li class="col-1"><a href="index.php">Inicio</a></li>
            <li class="col-2"><a href="">Destacados</a></li>
            <li class="col-2"><a href="">Más vendidos</a></li>
            <li class="col-1"><a href="">Ofertas</a></li>
            <li class="col-2"><a href="">Comentarios</a></li>
            <li class="col-2"><a href="">Contacto</a></li>
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
</body>
</html>