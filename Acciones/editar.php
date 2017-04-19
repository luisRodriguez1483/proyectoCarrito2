<?php
	include'../php/conexion.php';
	$con=mysqli_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysqli_select_db($db,$con)or die("no existe la base de datos");


	if ($_FILES['foto']['name']=="") {
		mysqli_query("update timagen set descripcion_imagen ='".$_POST['descripcion_imagen']."' where id_imagen =".$_POST['id'].";");
	}
	else{
		$re = mysqli_query($con,"select ruta_imagen from timagen where".$_POST['id'].";");
		while ($f=mysql_fetch_array($re)) {
			unlink("../php/album/".$f['ruta_imagen']);
		}
		$ruta = "../php/album/";
		opendir($ruta);
		$destino = $ruta.$_FILES['foto']['name'];
		copy($_FILES['foto']['tmp_name'],$destino);
		$nombre=$_FILES['foto']['name'];
		mysql_query($con,"update timagen set descripcion_imagen ='".$_POST['descripcion_imagen']."', ruta_imagen ='".$nombre."' where id_imagen=".$_POST['id'].";");
	}
	header("Location: ../vistas");
?>
