<?php
	include'../php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
</head>
<body>
	<form action="../Acciones/editar.php" method="POST" enctype="multipart/form-data">
	<table>
		<TR>
			<td><label>Descripción:</label></td>
			<?php
			$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
			mysql_select_db($db,$con)or die("no existe la base de datos");

			$re = mysql_query("select descripcion_imagen, ruta_imagen from timagenes_slider where id_imagen = ".$_GET['editar'].";");
			while ($f=mysql_fetch_array($re)){
				?>
			<td><label><input type="text" name="descripcion_imagen"<?php echo 'value="'.$f['descripcion_imagen'].'"';?> /></label></td>
		</TR>
		<TR>

			<?php } ?>
			<input type="hidden" name="id" value=<?php echo '"'.$_GET['editar'].'"'; ?> >
		</TR>

	</table>
	<br>
	<input type="file" name="foto"/>
	<br/>
	<br>
	<input type="submit" value="Editar"/>
	</form>
</body>
</html>
