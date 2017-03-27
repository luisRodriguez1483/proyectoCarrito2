<option value="0">SELECCIONE UNA OPCION.....</option>
<?php

include '../conexion.php';
                		try{
                			$consultamun = "select * from tmunicipio where idEstado=".$_POST["idestadoprov"]."";
							$varmun = $conexion->query($consultamun);
							$cont = $varmun->fetchAll();

							foreach ($cont as $filam ) {
						?>

						<option value="<?php echo $filam['idMunicipio']; ?>"><?php echo utf8_encode($filam['Municipio']); ?></option>
						<?php
							}
                		}catch(Exception $error){
                			echo "ERROR DE CONSULTA ".$error->getMessage();
                		}
                		?>
