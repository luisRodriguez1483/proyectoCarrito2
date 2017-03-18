<?php

include '../conexion.php';
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$nivel = $_POST['nivel'];
$status = $_POST['status'];
try {
    
    $query = "UPDATE tusuarios SET Usuario=:usuario,Password=:pass,Tipo=:tipo,Status=:status WHERE idUsuario=:id";
    $sql = $conexion->prepare($query);
    
    $sql->bindParam(':id',$id);
    $sql->bindParam(':usuario',$usuario);
    $sql->bindParam(':pass',$password);
    $sql->bindParam(':tipo',$nivel);
    $sql->bindParam(':status',$status);
    
    $resultado = $sql->execute();
    if($resultado == true){
        echo 1;
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}


