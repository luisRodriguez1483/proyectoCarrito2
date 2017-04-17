	<?php
    	include '../conexion.php';

    ?>
	 <form class="formulario" id="formularioProducto" enctype="multipart/form-data">
              	<div>
              		<label class="formulario">Nombre del producto: </label>
                	<input type="text" required name="txtnommbreproducto" id="txtnommbreproducto" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Descripcion: </label>
                	<input type="text" required name="txtcaracteristicas" id="txtcaracteristicas" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Categoría: </label>
                	<select id="tcat" name="tcat">
                		<option value="0">SELECCIONE UNA OPCION.....</option>
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
                	<label class="formulario">Proveedor: </label>
                	<select id="tprov" name="tprov">
                		<option value="0">SELECCIONE UNA OPCION.....</option>
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
                	<label class="formulario">Existencias: </label>
                	<input type="text" required name="txtexistencia" id="txtexistencia" class="caja"/>
                </div>
                 <div>
                	<label class="formulario">Precio compra: </label>
                	<input type="text" required name="txtcompra" id="txtcompra" class="caja"/>
                </div>
                <div>
                	<label class="formulario">Imágen: </label>
                	<input type="file" required name="txtimagen" id="txtimagen" class="caja"/>
                </div>
                <div>
                	<input type="button" value="Enviar" class="btn" id="btnRegProducto"/>
                </div>

     </form>

