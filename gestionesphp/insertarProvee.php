<?php

include '../conexion.php';

$empresa = $_POST['empresa'];
$contacto = $_POST['contacto'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$idEstado = $_POST['idEstado'];
$idMun = $_POST['idMunicipio'];
$idCol = $_POST['idCol'];
$cp = $_POST['cp'];

try{
    
    $insertarProve = "INSERT INTO tproveedor (empresa,contacto,telefono,celular,correo,idEstado,idMunicipio,idColonia,CodPostal) VALUES(:empresa,:contacto,:telefono,:celular,:correo,:idEstado,:idMun,:idCol,:cp)";
    $sql = $conexion->prepare($insertarProve);
    
    $sql->bindParam(':empresa',$empresa);
    $sql->bindParam(':contacto',$contacto);
    $sql->bindParam(':telefono',$telefono);
    $sql->bindParam(':celular',$celular);
    $sql->bindParam(':correo',$correo);
    $sql->bindParam(':idEstado',$idEstado);
    $sql->bindParam(':idMun',$idMun);
    $sql->bindParam(':idCol',$idCol);
    $sql->bindParam(':cp',$cp);
    
    $result = $sql->execute();
    
    if($result == true){
        echo 1;
        
    }
    
}catch(Exception $ex){
    echo $ex->getMessage();
}


