<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" media="screen"/>
               <script src="gestionesjs/Administracion.js" type="text/javascript"></script>
    </head>
    <body>
        <table style="font-family: Arial"> 
           <tr>
                <td class="filaAgregar"><img  src="images/agregar.png" id="btnImgAgregarUsu" style="width: 30px;"/></td>
                <td class="filaAgregar">Agregar....</td>
           </tr>
        </table>
   
        <table id="tblUsuarios" >
            <thead>
                <tr>
            <th style="display:none"></th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Tipo</th>
            <th>Status</th>
            <th></th>
            <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './conexion.php';
                try {
                    $query = "SELECT * FROM tusuarios";
                    
                    $execute = $conexion->query($query);  
                    $rs = $execute->fetchAll();
                    foreach ($rs as $row){
                        echo '<tr>';
                        echo '<td style="display:none">'.$row['idUsuario'].'</td>'; 
                        echo '<td>'.$row["Usuario"].'</td>';
                        echo '<td>'.$row["Password"].'</td>';
                        echo '<td>'.$row['Tipo'].'</td>';
                        echo '<td>'.$row['Status'].'</td>';
                        echo '<td><label  id="update"><img src="images/actualizar.png" style="width:22px"/> Editar</label></td>';
                        echo '<td><label id="remove"><img src="images/eliminar.png" style="width:22px" /> Eliminar</label></td>';
                        echo '</tr>';
                    }
                    
                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
            </tbody>
        </table>
        
    </body>
</html>
