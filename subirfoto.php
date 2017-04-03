<?php

require 'views/subirfoto.view.php';
require 'conexion.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


//Recibir las variables por POST
if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_FILES)){
   /* $producto=filter_var($_POST['producto'], FILTER_SANITIZE_STRING);
    $descripcion=filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $foto=$_FILES['foto'];
    $categorias=$_POST['categorias'];
    $proveedor=$_POST['proveedor'];*/
    $check= @getimagesize($_FILES['foto']['tmp_name']);
    if($check !== false){
        $carpeta_destino='images/bd/';
        $archivo_subido=$carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

            // prepare sql and bind parameters
            $statement = $conexion->prepare('INSERT INTO timagen (Nombre, Imagen, Descripcion) 
            VALUES (:Nombre, :Imagen, :Descripcion)');
            
            $statement->execute(array(
                ':Nombre' => $_POST['producto'],
                ':Imagen' => $_FILES['foto']['name'],
                ':Descripcion' => $_POST['descripcion'],
            ));

            header('Location: index.php');

        }else{
                $error="El archivo no es una imagen o el archivo es muy pesado";
            }
        }



?>