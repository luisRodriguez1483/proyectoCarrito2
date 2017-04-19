<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestor de slider</title>

</head>
<body>
<header>
	Administrador de slider
</header>
<section>
<form id="subida" method="post" enctype="multipart/form-data">
<table>
	<tr>
    	<td><input type="file" id="foto" name="foto"/></td>
    </tr>
    <tr>
    	<td><textarea id="desc" name="desc" placeholder="Ingrese una descripción de la imágen.."></textarea></td>
    </tr>
    <tr>
    	<td><input type="submit" value="Publicar"/></td>
    </tr>
</table>
<img src="../recursos/cargando.gif" class="cargando" id="cargando"/>
</form>
<fieldset><legend>Imágenes en el slider</legend>
<ul class="fotos" id="fotos">
			<?php
                include('../php/conexion.php');
   $rs = mysqli_query($con,"SELECT * FROM timagen");
				$comprobar = mysqli_num_rows($rs);
				if($comprobar>0){
					$fotos = mysqli_query($con,"SELECT * FROM timagen ORDER BY id_imagen ASC");
					while($fotos2 = mysqli_fetch_array($fotos)){
						echo '<li>
									<a href="../php/album/'.$fotos2['ruta_imagen'].'" target="_blank"><img src="../php/album/'.$fotos2['ruta_imagen'].'" class="img-subida" title="'.$fotos2['descripcion_imagen'].'"></a>
								</li>';
					}
				}else{
					echo '<p align="center" style="font-size:12px;">El slider está vacío..</p>';
				}
            ?>
</ul>
</fieldset>




<table border="2px">
	<tr>
		<td>Descripción</td>
		<td>Imagen</td>
		<td>Acciones</td>
	</tr>

	<?php
		//include ('../php/conexion.php');
		$re = mysqli_query($con,"SELECT * FROM timagen")or die(mysql_error());
		while ($fotos2=mysqli_fetch_array($re)) {
	?>
	<tr>

		<td><?php echo $fotos2['descripcion_imagen'];?></td>
		<td><?php echo '<li>
							<a href="../php/album/'.$fotos2['ruta_imagen'].'" target="_blank"><img src="../php/album/'.$fotos2['ruta_imagen'].'" class="img-subida" title="'.$fotos2['descripcion_imagen'].'"></a>
						</li>';	?></td>

		<td><?php echo '<a href="../Acciones/eliminar.php?eliminar='.$fotos2['id_imagen'].'">Eliminar</a>';?>
			<?php echo '<a href="editar.php?editar='.$fotos2['id_imagen'].'">Editar</a>';?></td>

	</tr>
	<?php
	}
	?>

</table>


</section>
</body>
</html>
