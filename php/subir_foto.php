<!DOCTYPE html>
<html>
	<body>
<?php
include('conexion.php');

$descripcion = $_GET['desc'];
$foto = $_FILES['foto']['name'];

	if($_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png" || $_FILES['foto']['type'] == "image/gif"){

		$ingresar = mysqli_query($con,"INSERT INTO timagen (descripcion_imagen, ruta_imagen)VALUES('$descripcion','$foto')");

			if(move_uploaded_file($_FILES['foto']['tmp_name'], 'album/'.$foto)){

				$subida = mysqli_query($con,"SELECT * FROM timagen ORDER BY id_imagen DESC LIMIT 1");
				while($subida2 = mysqli_fetch_array($subida)){
				echo '<li>
						<a href="../php/album/'.$subida2['ruta_imagen'].'" target="_blank"><img src="../php/album/'.$subida2['ruta_imagen'].'" class="img-subida" title="'.$subida2['descripcion_imagen'].'"></a>
					 <li>';
					}
			}
	}else{
		echo '<script type="text/javascript">alert("Archivo no permitido intente con archivos de extensión .jpg .png");</script>';



	}
?>
	</body>
</html>
