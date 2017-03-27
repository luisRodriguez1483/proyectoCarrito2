<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Formulario Cliente</title>
<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="combosdinamicos.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="estilosform.css"/>
</head>

<body>
	<?php
                		include '../conexion.php';

                		?>
     <center>
     <div>
	 <form method="post" action="cliente.php" class="formulario">

              		<label class="formulario">Cliente</label>
                	<input type="text" required name="txtcliente" class="caja" placeholder="Nombre"/>

              		<label class="formulario">Teléfono fijo: </label>
                	<input type="tel" required name="txttelefono" class="caja" placeholder="Número"/>

              		<label class="formulario">Teléfono Celular: </label>
                	<input type="tel" required name="txttelefonocelular" class="caja" placeholder="Número"/>

              		<label class="formulario">Correo electrónico: </label>
                	<input type="email" required name="txtcorreo" class="caja" placeholder="e-mail"/>

              		<label class="formulario">Estado: </label>
                	<select id="testadocli">
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
                	</select>
              		<label class="formulario">Municipio: </label>
                	<select id="tmunicipiocli">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>

                	<label class="formulario">Colonia: </label>
                	<select id="tcoloniacli">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>

                	<label class="formulario">Código postal: </label>
                	<select id="tcpcli">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>
					<center>
                	<input type="submit" value="Enviar" class="btn" /></a>
                    </center>
     </form>
     </div>
     </center>
</body>

<footer>

</footer>
