<?php
	include'../php/conexion.php';
	$id= $_GET['eliminar'];
	$con=mysqli_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysqli_select_db($db,$con)or die("no existe la base de datos");

	$re = mysqli_query("select ruta_imagen from timagen where id_imagen=".$id.";");
	while ($imagen=mysqli_fetch_array($re)) {
		$espera = unlink("../php/album/".$imagen['ruta_imagen']);
	}
	mysqli_query("delete from timagen where id_imagen =".$id.";");
	header("Location: ../vistas");
