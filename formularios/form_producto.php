<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>Formulario Producto</title>
<script src="jquery-3.1.1.min.js"></script>
<script src="combosdinamicos.js" type="text/javascript"></script>

</head>

<body>
	<?php
    	include '../conexion.php';

    ?>
	 <form method="post" action="producto.php" class="formulario">
	 			<div>
	 				<label class="formulario">Id producto: </label>
                	<label>hacer la consulta</label>
	 			</div>
              	<div>
              		<label class="formulario">Nombre del producto: </label>
                	<input type="text" required name="txtnommbreproducto" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Caracteristicas: </label>
                	<input type="text" required name="txtcaracteristicas" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Id categoría: </label>
                	<select id="tcat">
                		<option>SELECCIONE UNA OPCION.....</option>
                		<?php
                		try{
                			$consultacat = "select * from tcategoria";
							$varcat = $conexion->query($consultacat);
							$contcat = $varcat->fetchAll();
							foreach ($contcat as $fila) {
						?>
						<option value="<?php echo $fila['idCategoria']; ?>"><?php echo utf8_encode($fila['Categoria']);?></option>
						<?php
							}
                		}catch(Exception $erro){
                			echo "ERROR DE LA CONSULTA ".$erro->getMessage();
                		}
                		?>
                	</select>
              	</div>
                <div>
                	<label class="formulario">Id proveedor: </label>
                	<select id="tprov">
                		<option>SELECCIONE UNA OPCION.....</option>
                		<?php
                		try{
                			$consultaprov = "select idProveedor, empresa from tproveedor";
							$varprov = $conexion->query($consultaprov);
							$contprov = $varprov->fetchAll();
							foreach ($contprov as $fila) {
						?>
						<option value="<?php echo $fila['idProveedor']; ?>"><?php echo utf8_encode($fila['empresa']); ?></option>
						<?php
							}
                		}catch(Exception $error){
                			echo "ERROR DE CONSULTA ".$error->getMessage();
                		}

                		?>
                	</select>
                </div>
                <div>
                	<label class="formulario">Precio venta: </label>
               		<input type="text" required name="txtventa" class="caja"/>
                </div>
                <div>
                	<label class="formulario">Precio compra: </label>
                	<input type="text" required name="txtcompra" class="caja"/>
                </div>
                <div>
                	<label class="formulario">Imágen: </label>
                	<input type="file" required name="txtimagen" class="caja"/>
                </div>
                <div>
                	<input type="submit" value="Enviar" class="btn" /></a>
                </div>

     </form>
</body>

<footer>

</footer>
