<?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $base = "proyecto";
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
           //echo 'Conexion establecida';
           //Hola Mundo bienvenido a Git
           $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo "ERROR DE CONEXION  ".$exc->getMessage();
        }

        function conexion($bd, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
       

