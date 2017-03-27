<option value="0">SELECCIONE UNA OPCION.....</option>
<?php

include '../conexion.php';
                		try{
                			$consultacol = "select * from tcolonia where idMunicipio=".$_POST["idmunicipioprov"]."";
							$varcol = $conexion->query($consultacol);
							$contcol = $varcol->fetchAll();

							foreach ($contcol as $filac) {
						?>

						<option value="<?php echo $filac['idColonia']; ?>"><?php echo utf8_encode($filac['Colonia']); ?></option>
						<?php
							}
                		}catch(Exception $err){
                			echo "ERROR DE CONSULTA ".$err->getMessage();
                		}
						?>
