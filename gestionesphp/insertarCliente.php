<?php

include '../conexion.php';

$nombreCliente = $_POST['nomCliente'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$telefono = $_POST['telefonoFijo'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$mun = $_POST['mun'];
$col = $_POST['col'];
$cp = $_POST['cp'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
try{
$querySelectU = "SELECT * FROM tusuarios WHERE Usuario=:usuario ";
$sqlU = $conexion->prepare($querySelectU);
$sqlU->execute(array(':usuario'=>$usuario));
$noFilaU = $sqlU->rowCount();
}catch(Exception $ex1){
echo "ERROR PRIMERA CONSULTA ".$ex->getMessage();
}
try{
$querySelectC = "SELECT * FROM tcliente WHERE correo=:correo ";
$sqlC = $conexion->prepare($querySelectC);
$sqlC->execute(array(':correo'=>$correo));
$noFilaC = $sqlC->rowCount();
}catch(Exception $ex2){
echo "ERROR SEGUNDA CONSULTA ".$ex2->getMessage();
}
if($noFilaU != 0){
echo 1;
}elseif($noFilaC != 0){
echo 2;
}else{

try{
$insertarDatosUsuario = "INSERT INTO tusuarios (Usuario,Password,Tipo,Status) VALUES(:usuario,:pass,:tipo,:status)";
$r = $conexion->prepare($insertarDatosUsuario);
$r->bindParam(':usuario',$usuario);
$r->bindParam(':pass',$pass);
$r->bindParam(':tipo',$tipo);
$r->bindParam(':status',$status);

$rs  = $r->execute();
$idU = $conexion->lastInsertId();


if($rs == true){
//$conexion->lastInsertId($r);
try{
$insertarDatosCliente = "INSERT INTO tcliente (Cliente,telefono,celular,correo,idEstado,idMunicipio,idColonia,CodPostal,idUsuario)
VALUES (:cliente,:telefono,:celular,:correo,:estado,:mun,:col,:cp,:usuario)";
$c = $conexion->prepare($insertarDatosCliente);
$c->bindParam(':cliente',$nombreCliente);
$c->bindParam(':telefono',$telefono);
$c->bindParam(':celular',$celular);
$c->bindParam(':correo',$correo);
$c->bindParam(':estado',$estado);
$c->bindParam(':mun',$mun);
$c->bindParam(':col',$col);
$c->bindParam(':cp',$cp);
$c->bindParam(':usuario',$idU);

$rs3 = $c->execute();

if($rs3 == true){
echo 3;
}

}catch(Exception $ex4){
echo "ERROR AL INSERTAR EN TABLA CLIENTE ".$ex4->getMessage();
}
}
}catch(Exception $ex3){
echo "ERROR AL INSERTAR EN TABLA USUARIO".$ex3->getMessage();
}
}
?>