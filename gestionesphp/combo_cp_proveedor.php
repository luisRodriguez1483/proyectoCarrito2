<option value="0">SELECCIONE UNA OPCION.....</option>
<?php

include '../conexion.php';
                		try{
                			$consultacp = "select CodPostal from tcolonia where idColonia=".$_POST["idcoloniaprov"]."";
							$varcp = $conexion->query($consultacp);
							$contcp = $varcp->fetchAll();
							foreach ($contcp as $fila) {
						?>
						<option value="<?php echo $fila['CodPostal']; ?>"><?php echo utf8_encode($fila['CodPostal']); ?></option>
						<?php
							}
                		}catch(Exception $err){
                			echo "ERROR DE CONSULTA ".$err->getMessage();
                		}
						?>
