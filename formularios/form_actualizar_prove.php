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

    include '../conexion.php'

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
                	<input type="text" required id="txtnombreempresa" class="caja" value="<?php $row['empresa']?>" />
              	</div>
              	<div>
              		<label class="formulario">Contacto: </label>
                	<input type="text" required id="txtcontacto" class="caja" value="<?php $row['contacto']?>"/>
              	</div>
              	<div>
              		<label class="formulario">Teléfono fijo: </label>
                	<input type="tel" required id="txttelefono" class="caja" maxlength="8" value='<?php $row['telefono']?>'/>
              	</div>
              	<div>
              		<label class="formulario">Teléfono Celular: </label>
                <input type="tel" required id="txttelefonocelular" maxlength="10" class="caja" />
              	</div>
              	<div>
              		<label class="formulario">Correo electrónico: </label>
                	<input type="email" required id="txtcorreo" class="caja" />
              	</div>
              	<div>
                	<label class="formulario">Estado: </label>
                	<select id="testadoprov">
                            <?php include 'combo_estado.php'?>
                	</select>
                </div>
              	<div>
              		<label class="formulario">Municipio</label>
                	<select id="tmunicipioprov">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select>
              	</div>
                <div>
                	<label class="formulario">Colonia: </label>
                	<select id="tcoloniaprov">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select>
                </div>
                <div>
                	<label class="formulario">Código postal: </label>
                	<select id="tcpprov">
                		<option value="0">SELECCIONE UNA OPCION.....</option>

                	</select>
                </div>

                <div>
                	<input type="button" value="Enviar" class="btn" id="btnActualizarProveedor"/>
                </div>

     </form>

     }

    }catch(){

    }
</body>

<footer>

</footer>
