<?php
include 'conexion.php';
$idProducto = $_POST['id'];
$cantidad = $_POST['cantidad'];

if(isset($idProducto) && isset($cantidad)){
session_start();
if(empty($_SESSION['idUsuario']) && empty($_SESSION['Usuario'])){
   
echo 1;
}else{
try{
$querySELECT = "SELECT * FROM tproducto WHERE idProducto=:id";
$s = $conexion->prepare($querySELECT);
$s->execute(array('id'=>$idProducto));
$rs = $s->fetchAll();
foreach($rs as $row ){
$nomProducto = $row['Producto'];
$precio = $row['Precio'];
}
$subtotal = $precio * $cantidad;
//Si es el primer producto
if(empty($_SESSION['carrito'])){
$_SESSION['carrito'] = array(array('id'=>$idProducto,'nomPro'=>$nomProducto,'cantidad'=>$cantidad,'precio'=>$precio,'subtotal'=>$subtotal));
echo 2;
}else {
 $carro = $_SESSION['carrito'];
            array_push($carro,array('id'=>$idProducto,'nomPro'=>$nomProducto,'cantidad'=>$cantidad,'precio'=>$precio,'subtotal'=>$subtotal));
            $_SESSION['carrito']=$carro;
            echo 2;
}
}catch(Exception $ex){
echo "ERROR EN LA CONSULTA ".$ex->getMessage();
}
}
}else{
 echo "variables no definidas";
}

?>