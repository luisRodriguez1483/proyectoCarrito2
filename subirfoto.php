<?php


require 'conexion.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


//Recibir las variables por POST
if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_FILES)){
    $producto=filter_var($_POST['producto'], FILTER_SANITIZE_STRING);
    $descripcion=filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $existencias=filter_var($_POST['existencias'], FILTER_VALIDATE_INT);
    $precio=$_POST['precio'];
    $idCat=filter_var($_POST['categoria'], FILTER_VALIDATE_INT);
    $idProv=filter_var($_POST['proveedor'], FILTER_VALIDATE_INT);
   /* $foto=$_FILES['foto'];
    $categorias=$_POST['categorias'];
    $proveedor=$_POST['proveedor'];*/
    $check= @getimagesize($_FILES['foto']['tmp_name']);
    if($check !== false){
        $carpeta_destino='images/bd/';
        $archivo_subido=$carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

            // prepare sql and bind parameters
            $statement = $conexion->prepare('INSERT INTO tproducto (Producto, Imagen, Descripcion, Existencias, Precio, idCategoria, idProveedor) 
            VALUES (:Producto, :Imagen, :Descripcion, :Existencias, :Precio, :idCategoria, :idProveedor)');
            
            $statement->execute(array(
                ':Producto' => $producto,
                ':Imagen' => $_FILES['foto']['name'],
                ':Descripcion' => $descripcion,
                ':Existencias' => $existencias,
                ':Precio' => $precio,
                ':idCategoria' => $idCat,
                ':idProveedor' => $idProv,
            ));

            header('Location: index.php');

        }else{
                $error="El archivo no es una imagen o el archivo es muy pesado";
            }
        }
        //Consulta para mostrar en un combo las categorias
        $querycat=$conexion->prepare("SELECT * FROM tcategoria");
        $querycat->execute();
        $categoria=$querycat->fetchAll();
        //Consulta para mostrar en un combo los proveedores
        $queryprov=$conexion->prepare("SELECT * FROM tproveedor");
        $queryprov->execute();
        $proveedor=$queryprov->fetchAll();

        require 'views/subirfoto.view.php';

?>