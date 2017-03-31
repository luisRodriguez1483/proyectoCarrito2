<?php
session_start();
if(empty($_SESSION['idUsuario']) && empty($_SESSION['Tipo'])){
include 'views/index.view.php';
}else{

header("Location:index.php");
}


?>
