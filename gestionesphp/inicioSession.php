<?php
include '../conexion.php';
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


try {
    
    $query = "SELECT Usuario,Password,Status,Tipo,idUsuario FROM tusuarios WHERE Usuario=:usuario";
    $sql = $conexion->prepare($query);
   $sql->execute(array(':usuario'=>$usuario));
    $numeroFilas = $sql->rowCount();
   
    if($numeroFilas != 0){
    $rs = $sql->fetchAll();
    foreach($rs as $row){
        $password = $row['Password'];
        $status  = $row['Status'];
        $tipo = $row['Tipo'];
        $id = $row['idUsuario'];
        $usuario = $row['Usuario'];
    }
    if($pass == $password){  
            if($status == "Activo"){
                session_start();
                
            $_SESSION['Tipo'] = $tipo;
            $_SESSION['usuario'] = $usuario;

                echo 4;
            }else {
                echo 3;
            }
        }else {
            echo 2;
        }
    
    }else {
        echo 1;
    }
} catch (Exception $exc) {
    echo $exc->getMessage();
}



