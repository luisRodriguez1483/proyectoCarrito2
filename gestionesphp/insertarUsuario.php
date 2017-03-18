<?php
include '../conexion.php';

$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$nivel = $_POST['nivel'];
$status = $_POST['status'];


try {
    $insertar = "INSERT INTO tusuarios(Usuario,Password,Tipo,status) VALUES(:nombre,:password,:tipo,:status)"; 
    $sql = $conexion->prepare($insertar);
    $sql->bindParam(':nombre',$usuario);
    $sql->bindParam(':password',$password);
    $sql->bindParam(':tipo',$nivel);
    $sql->bindParam(':status',$status);
    
				$resultado=$sql->execute();
				if($resultado==true){
					//$ultimo_id=$conexion->lastInsertId();
					echo 1;
					
				}
} catch (Exception $ex) {
    echo 'ERROR EN '.$ex->getMessage();
}