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
