<?php

include '../conexion.php';

$id = $_POST['id'];
try {
    $query = "SELECT * FROM tusuarios WHERE idUsuario = :id";
    
    $sql = $conexion->prepare($query);
    $sql->execute(array('id'=>$id));
    $rs = $sql->fetchAll();
    
    foreach ($rs as $row) {
?>

 
<form>
              	<div>
              		<label class="formulario">Usuario: </label>
                        <input type="hidden" id="idUsuario" value="<?php echo $id?>"/>
                        <input type="text" required id="txtusuario" class="caja" value="<?php echo $row['Usuario']?>"/>
              	</div>
              	<div>
              		<label class="formulario">Contraseña: </label>
                        <input type="text" required id="txtcontrasenia" class="caja" value="<?php echo $row['Password']?>" />
              	</div>
              	<div>
              		<label class="formulario">Nivel: </label>
                        <select id="cmbNivel">
                            <?php
                            if($row['Tipo'] == "Administrador"){
                            ?>
                            <option value="Administrador">Administrador</option>
                             <option value="Secretaria">Secretaria</option>
                            <?php
                            }else {
                            ?>
                            <option value="Secretaria">Secretaria</option>
                            <option value="Administrador">Administrador</option>
                            
                            <?php } ?>
                	</select>
                </div>      
                <div>
              		<label class="formulario">Status: </label>
                        <select id="cmbStatus">
                            <?php
                            if($row['Status'] == "Activo"){
                            ?>
                            
                            <option value="Activo">Activo</option>
                            <option value="Suspendido">Suspendido</option>
                            <?php }else {?>
                            <option value="Suspendido">Suspendido</option>
                            <option value="Activo">Activo</option>
                            
                            <?php }?>
                	</select>
                </div>
                <div>
                    <input type="button" value="Enviar" id="btnActUsuario" /></a>
                </div> 
     </form>
 <?php  
    }        
} catch (Exception $exc) {
    echo "ERROR DE CONSULTA ".$exc->getMessage();
}
        
        