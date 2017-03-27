<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Formulario Proveedor</title>
<script src="jquery-3.1.1.min.js"></script>
<script src="combosdinamicos.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="estilosform.css"/>
</head>

<body>
	<?php
    	include '../conexion.php';

    ?>

	 <form method="post" action="proveedor.php" class="formulario">

              	<div>
              		<label class="formulario">Nombre de la empresa: </label>
                	<input type="text" required name="txtnombreempresa" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Contacto: </label>
                	<input type="text" required name="txtcontacto" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Teléfono fijo: </label>
                	<input type="tel" required name="txttelefono" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Teléfono Celular: </label>
                	<input type="tel" required name="txttelefonocelular" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Correo electrónico: </label>
                	<input type="email" required name="txtcorreo" class="caja" />
              	</div>
              	<div>
                	<label class="formulario">Estado: </label>
                	<select id="testadoprov">
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
                </div>
              	<div>
              		<label class="formulario">Municipio: </label>
                	<select id="tmunicipioprov">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>
              	</div>
                <div>
                	<label class="formulario">Colonia: </label>
                	<select id="tcoloniaprov">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>
                </div>
                <div>
                	<label class="formulario">Código postal: </label>
                	<select id="tcpprov">
                		<option>SELECCIONE UNA OPCION.....</option>

                	</select>
                </div>

                <div>
                	<input type="submit" value="Enviar" class="btn" /></a>
                </div>

     </form>
</body>

<footer>

</footer>
