<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Registro de Clientes</title>
<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="combosdinamicos.js" type="text/javascript"></script>

<!--<link rel="stylesheet" type="text/css" href="estilosform.css"/>-->
<link href="../css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/style.css">
</head>

<body>
	<?php
                		include '../conexion.php';

                		?>
     <div class="contenedor">
	 <p class="furniture">furniture<b>store</b></p>
    <ul class="cabecera">
        <li class="col-2">
            <a href=""></a>
        </li>
        <li class="col-2 col-m-12"><a href="">Envíos y Devoluciones</a></li>
        <li class="col-2 col-m-12"><a href="">Búsqueda Avanzada</a></li>
        <li class="col-2 col-m-12"><a href="form_cliente.php">Crear una Cuenta</a></li>
        <li class="col-2 col-m-12"><a href="../login.php">Iniciar sesión</a></li>
        <li class="carrito col-2 col-m-12"><a href="">Carrito:</a></li>
    </ul>
	<header class="menu">
        <ul>
            <li class="col-1"><a href="../index.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-1"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="../contacto.php"><span class="icon-mail5">Contacto</span></a></li>
            <li class="col-2"><input type="text" name="buscador" value="" placeholder="Buscar:"></li>
        </ul>
    </header>
	<article class="formulario">
	<h1>Registro de Clientes</h1><br>
	 <form method="post" action="cliente.php" class="formulario">

              		<span class="icon-user3 mail"><label>Cliente:</label></span>
                	<input type="text" required name="txtcliente" class="incliente" placeholder="Nombre:"/><br><br>

              		<span class="icon-phone3 mail"><label>Teléfono fijo: </label></span>
                	<input type="tel" required name="txttelefono" class="" placeholder="Número:"/><br><br>

              		<span class="icon-mobile3 mail"><label>Teléfono Celular: </label></span>
                	<input type="tel" required name="txttelefonocelular" class="" placeholder="Número:"/><br><br>

              		<span class="icon-at2 mail"><label>Correo electrónico: </label></span>
                	<input type="email" required name="txtcorreo" class="" placeholder="E-mail:"/><br><br>

              		<span class="icon-question2 mail"><label>Estado: </label></span>
                	<select id="testadocli" class="select">
                		<option>SELECCIONE UNA OPCION.....</option>
                		<?php
                		try{
                		$consulta = "select * from testado";
						$var = $conexion->query($consulta);
						$jaja = $var->fetchAll();
						foreach ($jaja as $fila) {
                		?>
                		<option value="<?php echo $fila['idEstado']; ?>"><?php echo utf8_encode($fila['Estado']);?></option>
                		<?php
						}
                		}catch(Exception $error){
								echo "ERROR DE CONSULTA ".$error->getMessage();
						}
                		?>
                	</select><br><br>
              		<span class="icon-question2 mail"><label>Municipio: </label></span>
                	<select id="tmunicipiocli" class="select">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select><br><br>

                	<span class="icon-question2 mail"><label>Colonia: </label></span>
                	<select id="tcoloniacli" class="select">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select><br><br>

                	<span class="icon-question2 mail"><label>Código postal: </label></span>
                	<select id="tcpcli" class="select">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select><br><br><br><br>
                	<input type="submit" value="Enviar" class="submit" /></a>
     </form>
	 </article>
     </div>
</body>

<footer>

</footer>
