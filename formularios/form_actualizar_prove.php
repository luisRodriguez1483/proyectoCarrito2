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

    $id = $_POST['idProveedor'];
    try{

        $query = "SELECT * FROM tproveedor WHERE idProveedor=:id";
        $sql = $conexion->prepare($query);
        $sql->execute(array('id'=>$id));
        $rs = $sql->fetchAll();

        foreach($rs as $row){

    ?>
	 <form class="formulario">

              	<div>
              		<label class="formulario">Nombre de la empresa: </label>
              		<input type="hidden" id="idProv" value="<?php echo $id ?>"/>
                	<input type="text" required id="txtnombreempresa" class="caja" value="<?php echo utf8_encode($row['empresa'])?>" />
              	</div>
              	<div>
              		<label class="formulario">Contacto: </label>
                	<input type="text" required id="txtcontacto" class="caja" value="<?php echo utf8_encode($row['contacto'])?>"/>
              	</div>
              	<div>
              		<label class="formulario">Teléfono fijo: </label>
                	<input type="tel" required id="txttelefono" class="caja" maxlength="8" value='<?php echo utf8_encode($row['telefono'])?>'/>
              	</div>
              	<div>
              		<label class="formulario">Teléfono Celular: </label>
                <input type="tel" required id="txttelefonocelular" maxlength="10" class="caja" value="<?php echo utf8_encode($row['celular'])?>"/>
              	</div>
              	<div>
              		<label class="formulario">Correo electrónico: </label>
                	<input type="email" required id="txtcorreo" class="caja" value="<?php echo utf8_encode($row['correo'])?>"/>
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

                            if($row['idEstado'] == $fila['idEstado']){

                		?>
                		<option value="<?php echo $row['idEstado']; ?>" selected><?php echo utf8_encode($fila['Estado']);?></option>
                		<?php
                            }else{
                                ?>
                        <option value="<?php echo $fila['idEstado']; ?>"><?php echo utf8_encode($fila['Estado']);?>
                                <?php
						}
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
                		<?php
                        try{
                            $query = "SELECT * FROM tmunicipio WHERE idEstado=".$row['idEstado'];
                           $id = $conexion->query($query);
                            $rs1 = $id->fetchAll();

                            foreach($rs1 as $row1){
                                if($row['idMunicipio'] == $row1['idMunicipio']){
                                ?>
             <option value="<?php echo $row['idMunicipio']; ?>" selected><?php echo utf8_encode($row1['Municipio']); ?></option>
                                <?php
                                }else {
                                    ?>
                        <option value="<?php echo $row1['idMunicipio']; ?>"><?php echo utf8_encode($row1['Municipio']); ?></option>
                                    <?php
                                }
                            }
                        }catch(Exception $ex){
                            echo 'ERROR EN A LA CONSULTA '.$ex->getMessage();
                        }


                        ?>

                	</select>
              	</div>


                <div>
                	<label class="formulario">Colonia: </label>
                	<select id="tcoloniaprov">
                		<?php
                        try{
                            $consultacol = "select * from tcolonia where idMunicipio=".$row['idMunicipio']."";
							$varcol = $conexion->query($consultacol);
							$contcol = $varcol->fetchAll();

							foreach ($contcol as $filac) {

                                if($row['idColonia'] == $filac['idColonia']){


						?>
				<option value="<?php echo $row['idColonia']; ?>" selected><?php echo utf8_encode($filac['Colonia']); ?></option>
						<?php
                                }else {

                                    ?>
                 <option value="<?php echo $filac['idColonia']; ?>"><?php echo utf8_encode($filac['Colonia']); ?></option>
                        <?php
                                }
							}
                        }catch(Exception $ex){
                            echo 'ERROR CONSULTA '.$ex->getMessage();
                        }


                        ?>
                	</select>
                </div>


                <div>
                	<label class="formulario">Código postal: </label>
                	<select id="tcpprov">
                <?php
                        try{

                            $consultacp = "select CodPostal from tcolonia where idColonia=".$row['idColonia']."";
							$varcp = $conexion->query($consultacp);
							$contcp = $varcp->fetchAll();
							foreach ($contcp as $fila) {

                                if($row['idColonia'] == $fila['idColonia']){

						?>
                <option value="<?php echo $row['CodPostal']; ?>" selected><?php echo utf8_encode($fila['CodPostal']); ?></option>
						<?php
                                }else{
                                    ?>
                       	<option value="<?php echo $fila['CodPostal']; ?>"><?php echo utf8_encode($fila['CodPostal']); ?></option>
                        <?php

                                }
							}

                        }catch(Exception $ex){
                            echo 'ERRRO DE CONSULTA '.$ex->getMessage();
                        }


                        ?>

                	</select>
                </div>

                <div>
                	<input type="button" value="Enviar" class="btn" id="btnActualizarProveedor"/>
                </div>

     </form>
<?php
     }

    }catch(Exception $ex){
        echo $ex->getMessage();
    }
    ?>
</body>

<footer>

</footer>
