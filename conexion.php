<?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $base = "proyecto";
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
           //echo 'Conexion establecida';
           //Hola Mundo
           $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo "ERROR DE CONEXION  ".$exc->getMessage();
        }
       

