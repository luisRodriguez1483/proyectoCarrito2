	<?php
    	include '../conexion.php';

        $idProducto = $_POST['id'];

        try{
                $queryPro = "SELECT * FROM tproducto WHERE idProducto=:idproducto";
        $sql = $conexion->prepare($queryPro);
        $sql->execute(array('idproducto'=>$idProducto));
        $resultSet = $sql->fetchAll();

        foreach($resultSet as $row){

    ?>
	 <form class="formulario" id="formularioProducto" enctype="multipart/form-data">
              	<div>
                  <input type="hidden" name="txtidProducto" id="txtidProducto" value="<?php echo $idProducto?>"/>
              		<label class="formulario">Nombre del producto: </label>
                	<input type="text" required name="txtnommbreproducto" id="txtnommbreproducto" class="caja" value="<?php echo $row['Producto']?>"/>
              	</div>
              	<div>
              		<label class="formulario">Descripcion: </label>
                	<input type="text" required name="txtcaracteristicas" id="txtcaracteristicas" class="caja" value="<?php echo $row['Descripcion']?>"/>
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

                                if($row['idCategoria'] == $fila['idCategoria']){
						?>
						<option value="<?php echo $row['idCategoria']; ?>" selected><?php echo utf8_encode($fila['Categoria']);?></option>
						            <?php
                                }else{
                                    ?>
        <option value="<?php echo $row['idCategoria']; ?>" ><?php echo utf8_encode($fila['Categoria']);?></option>
                                    <?php
							}
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
                                if($row['idProveedor'] == $fila['idProveedor']){
						?>
						<option value="<?php echo $row['idProveedor']; ?>" selected><?php echo utf8_encode($fila['empresa']);?></option>

                        <?php
						}else{
						
						?>
                        
                        <option value="<?php echo $row['idProveedor']; ?>"><?php echo utf8_encode($fila['empresa']);?></option>

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
                	<label class="label label-success">Existencias disponibles: <?php echo $row['Existencias']?> </label><br><br>
                    Agregar
                	<input type="number" required name="txtexistencia" id="txtexistencia" class="caja" min="0" value="0" 
					placeholder="Agregar"/>
                </div>
                 <div>
                	<label class="formulario">Precio compra: </label>
                	<input type="text" required name="txtcompra" id="txtcompra" class="caja" value="<?php echo $row['Precio']?>"/>
                </div>
                <div>
                <label>Imagen Actual: </label>
                <img style="width:80px"src="./albumProductos/<?php echo $row['Imagen']?>"/>
                	<label class="formulario">Imágen: </label>
                	<input type="file" required name="txtimagen" id="txtimagen" class="caja"/>
                </div>
                <div>
                	<input type="button" value="Enviar" class="btn" id="btnActProducto"/>
                </div>

     </form>

<?php
        }

}catch(PDOException $ex){
                echo $ex->getMessage();
        }

?>