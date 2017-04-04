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
