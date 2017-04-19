<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.js" type="text/javascript"></script>
     <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="gestionesjs/Carrito.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css"/>
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
        <h1 clas="col-12 col-m-12">Foto: <?php if(!empty($foto['Producto'])) {
            echo $foto['Producto'];
        }else{
            echo $foto['Imagen'];
        }
        ?>
        </h1>
        <div class="foto">
        
            <img src="albumProductos/<?php echo $foto['Imagen']; ?>" alt=""><br>
            <p><b>Descripción:</b> <?php echo $foto['Descripcion']; ?></p><br>
            <p><b>Costo: $ </b><?php echo $foto['Precio']; ?></p>

<form class="form">
<label>Cantidad: <label>
<input type="number" id="cantidad" min="0" value="0"/><br><br>
<input type="hidden" value="<?php echo $foto['idProducto']?>" id="idProducto"/>
<input type="button" value="Comprar" id="btnAgregarACarrito">
</form><br>
  <a href="index.php"><span class="icon-arrow-left-alt1"></span> Regresar</a>
        </div>
    </article>
    </div>
</body>
</html>