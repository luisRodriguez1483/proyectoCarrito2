<?php
session_start();
if(empty($_SESSION['idUsuario']) && empty($_SESSION['Usuario'])){
header('Location:index.php');

}else{

if(isset($_SESSION['carrito'])){
    $datos = $_SESSION['carrito'];
    $total = 0;

}else{
        echo '<center><h2>No has añadido ningun producto a tu carrito</h2></center>';

}


}


?>