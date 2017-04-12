<?php

include '../conexion.php';

try{

    $id = $_POST['id'];
    $empresa = $_POST['empresa'];
    $contacto = $_POST['contacto'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];

    $query = "UPDATE tproveedor SET empresa=:empresa,contacto=:contacto,telefono=:telefono,celular=:celular,correo=:correo WHERE idProveedor=:id";
    $sql = $conexion->prepare();
    $sql->bindParam(':id',$id);
    $sql->bindParam(':empresa',$empresa);
    $sql->bindParam(':contacto',$contacto);
    $sql->bindParam(':telefono',$telefono);
    $sql->bindParam(':celular',$celular);
    $sql->bindParam(':correo',$correo);

    $result = $sql->execute();

    if($result == true){
        echo 1;
    }

}catch(Exception $ex){
    $ex->getMessage();
}


?>
