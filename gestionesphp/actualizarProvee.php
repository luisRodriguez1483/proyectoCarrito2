<?php

include '../conexion.php';

try{

    $id = $_POST['id'];
    $empresa = $_POST['empresa'];
    $contacto = $_POST['contacto'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $idEstado = $_POST['idEstado'];
    $idMun = $_POST['idMunicipio'];
    $idCol = $_POST['idCol'];
    $cp = $_POST['cp'];


    $query = "UPDATE tproveedor SET empresa=:empresa,contacto=:contacto,telefono=:telefono,celular=:celular,correo=:correo,idEstado=:estado,idMunicipio=:mun,idColonia=:colonia,CodPostal=:cp WHERE idProveedor=:id";
    $sql = $conexion->prepare($query);
    $sql->bindParam(':id',$id);
    $sql->bindParam(':empresa',$empresa);
    $sql->bindParam(':contacto',$contacto);
    $sql->bindParam(':telefono',$telefono);
    $sql->bindParam(':celular',$celular);
    $sql->bindParam(':correo',$correo);
    $sql->bindParam(':estado',$idEstado);
    $sql->bindParam(':mun',$idMun);
    $sql->bindParam(':colonia',$idCol);
    $sql->bindParam(':cp',$cp);

    $result = $sql->execute();

    if($result == true){
        echo 1;
    }

}catch(Exception $ex){
    echo "ERRO DE CONSULTA ".$ex->getMessage();
}


?>
