<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Registro de Clientes</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<script src="gestionesjs/Cliente.js" type="text/javascript"></script>
<script src="gestionesjs/combosdinamicos.js" type="text/javascript"></script>
<!--<link rel="stylesheet" type="text/css" href="estilosform.css"/>-->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link href="css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/style.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css"/>
</head>

<body>
	<?php
                		include 'conexion.php';
session_start();
                		?>
     <div class="contenedor">
	 <p class="furniture">furniture<b>store</b></p>
    <ul class="cabecera">
        <li class="col-2">
            <a href=""></a>
        </li>
        <li class="col-2 col-m-12"><a href="">Envíos y Devoluciones</a></li>
        <li class="col-2 col-m-12"><a href="">Búsqueda Avanzada</a></li>
        <li class="col-2 col-m-12"><span class="icon-shopping-cart"> </span><a href="productosAgregados.php"> Mi carrito</a></li>
        <li class="col-2 col-m-12"><span class="glyphicon glyphicon-log-out"></span> <a style="cursor:pointer" id="btnCliSalir"> Salir</a></li>
        <li class="col-2 col-m-12"><a href="#"><?php echo "Bienvenido ".$_SESSION['Usuario']?></a></li>
    </ul>
	 <header class="menu">
        <ul>
            <li class="col-2"><a href="indexClientes.view.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-2"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="contacto.php"><span class="icon-mail5">Contacto</span></a></li>
        </ul>
    </header>
	<article class="formulario">
	<h1>Mis productos</h1><br>
	 <?php
if(empty($_SESSION['carrito'])){
    echo '<center><h2>No has agregado ningun articulo a tu carrito</h2></center>';

}else{
    
    ?>
    <center>
    <table class="table">
       <tr>
           <th style="display:none">Id producto</th>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Precio venta</th>
           <th>Subtotal</th>
           <th></th>
       </tr> 
        <?php
    foreach($_SESSION['carrito'] as $producto){
            
        ?>
        <tr>
            <td style="display:none"><?php echo $producto['id']?></td>
            <td><?php echo $producto['nomPro']?></td>
            <td><?php echo $producto['cantidad']?></td>
            <td><?php echo $producto['precio']?></td>
            <td><?php echo $producto['subtotal']?></td>
            <td><a class="label label-info label-lg" href="eliminarProducto.carrito.php?id=<?php echo $producto['id']?>">Eliminar<a></td>
        </tr>
        
        <?php } ?>
        
    </table>
    </center>
        <?php
    
}
?>


     
	 </article>
     </div>
</body>

<footer>

</footer>
