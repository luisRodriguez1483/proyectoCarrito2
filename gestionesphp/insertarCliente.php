<?php

include('../conexion.php');

$nombreCliente = $_POST['nomCliente'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$telefono = $_POST['telefonoFijo'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];
$mun = $_POST['mun'];
$col = $_POST['col'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];

$querySelect = "SELECT * FROM tusuarios INNER JOIN tcliente ";

?>