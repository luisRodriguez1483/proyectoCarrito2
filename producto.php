<?php
include './Conexion.php';
      try {
         $sql = $conexion ->query("SELECT * FROM contactos");
		
				$resultado = $sql->fetchAll();
				foreach($resultado as $row){
					echo $row["nombre"]."Mi edad es: ".$row["apellidoPaterno"]."<br>";
				}
       } catch (PDOException $exc) {
           echo "ERROR EN LA CONSULTA ".$exc->getMessage();
       }

       

