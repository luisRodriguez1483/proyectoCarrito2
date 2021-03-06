<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Registro de Clientes</title>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/sweetalert.min.js" type="text/javascript"></script>
<script src="../gestionesjs/Cliente.js" type="text/javascript"></script>
<script src="../gestionesjs/combosdinamicos.js" type="text/javascript"></script>
<!--<link rel="stylesheet" type="text/css" href="estilosform.css"/>-->
<link href="../css/styleindex.css" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/style.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css"/>
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
            <li class="col-2"><a href="../index.php"><span class="icon-home4">Inicio</span></a></li>
            <li class="col-2"><a href=""><span class="icon-star2">Destacados</span></a></li>
            <li class="col-2"><a href=""><span class="icon-trophy3">Más vendidos</span></a></li>
            <li class="col-2"><a href=""><span class="icon-price-tag">Ofertas</span></a></li>
            <li class="col-2"><a href=""><span class="icon-comment-alt2-fill">Comentarios</span></a></li>
            <li class="col-2"><a href="../contacto.php"><span class="icon-mail5">Contacto</span></a></li>
        </ul>
    </header>
	<article class="formulario">
	<h1>Registro de Clientes</h1><br>
	 <form class="formulario">


              		<span class="icon-user3 mail"><label>Nombre: </label></span>
                	<input type="text" required id="txtcliente" class="incliente" placeholder="Nombre Apellido:"/><br><br>

					<span class="icon-user3 mail"><label>Usuario: </label></span>
                	<input type="text" required id="txtusuario" class="incliente" placeholder="Usuario:"/><br><br>

					<span class="icon-user3 mail"><label>Password: </label></span>
                	<input type="password" required id="txtpass" class="incliente" placeholder="Password:"/><br><br>

					<span class="icon-user3 mail"><label>Confirmar contraseña: </label></span>
                	<input type="password" required id="txtconfpass" class="incliente" placeholder="Confirme password:"/><br><br>

              		<span class="icon-phone3 mail"><label>Teléfono fijo: </label></span>
                	<input type="tel" required id="txttelefono" class="" maxlength="8" placeholder="Número:"/><br><br>

              		<span class="icon-mobile3 mail"><label>Teléfono Celular: </label></span>
                	<input type="tel" required id="txttelefonocelular" class="" maxlength="10" placeholder="Número:"/><br><br>

              		<span class="icon-at2 mail"><label>Correo electrónico: </label></span>
                	<input type="text" required id="txtcorreo" class="" placeholder="E-mail:"/><br><br>

              		<span class="icon-question2 mail"><label>Estado: </label></span>
                	<select id="testadocli" class="select">
                	
                		<?php
                		include 'combo_estado.php';
                		?>
                	</select><br><br>
              		<span class="icon-question2 mail"><label>Municipio: </label></span>
                	<select id="tmunicipiocli" class="select">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select><br><br>

                	<span class="icon-question2 mail"><label>Colonia: </label></span>
                	<select id="tcoloniacli" class="select">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select><br><br>

                	<span class="icon-question2 mail"><label>Código postal: </label></span>
                	<select id="tcpcli" class="select">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select><br><br><br><br>
                	<input type="button" value="Enviar" class="submit" id="btnRegCliente" />
     </form>
	 </article>
     </div>
</body>

<footer>

</footer>
