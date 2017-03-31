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
            <li class="col-2"><a href="index.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-2"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="contacto.php"><span class="icon-mail5">Contacto</span></a></li>
        </ul>
    </header>
    <article class="formulario">
        <h1>Registrar Producto</h1>
        <div class="subir">
            <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="producto">Nombre del producto:</label>
                <input type="text" name="producto" id="producto"><br><br>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion"><br><br>
                <label for="foto">Selecciona la foto</label>
                <input type="file" name="foto" id="foto"><br><br>
                <label for="categoria">Categoria</label>
                <select>
                    <option value="" name="categoria" id="categoria">---Selecciona una categoría---</option>
                </select><br><br>
                <label for="">Proveedor</label>
                <select>
                    <option value="" name="proveedor" id="proveedor">---Selecciona un proveedor---</option>
                </select>
            </form>
        </div>
    </article>
    </div>
</body>
</html>