<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="gestionesjs/Usuarios.js" type="text/javascript"></script>
        <link href="css/styleindex.css" rel="stylesheet"/>
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
        <li class="col-2 col-m-12"><a href="">Crear una Cuenta</a></li>
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
    <article class="inicio">
        <h1>Inicio de Sesión</h1>
        <form action="" methood="POST">
        <div class="contenedorusuario">
        <span class="icon-user3 mail"><label for="correo">      Usuario:</label></span>
        <input type="text" name="usuario" id="txtusuario" placeholder"Escribe tu usuario:" /><br><br><br>
        </div>
        <div class="contenedorpass">
        <span class="icon-locked mail"><label for="asunto">Password:</label></span>
        <input type="password" name="password" id="txtpassword" placeholder"Escribe tu contraseña:"  /><br><br><br>
        </div>
        <div class="contenedorbtn">
        <input type="button" value="Ingresar" id="btnIngresar" class="submit">
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </form>
    </article>
    </div>
    </body>
</html>
