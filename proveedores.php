<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" media="screen"/>
               <script src="gestionesjs/administracion.js" type="text/javascript"></script>
    </head>
    <body>
        <table style="font-family: Arial">
           <tr>
                <td class="filaAgregar"><img  src="images/agregar.png" id="btnImgAgregarPro" style="width: 30px;"/></td>
                <td class="filaAgregar">Agregar....</td>
           </tr>
        </table>

        <table id="tblProveedores" >
            <thead>
                <tr>
            <th style="display:none"></th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th></th>
            <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './conexion.php';
                try {
                    $query = "SELECT * FROM tproveedor";

                    $execute = $conexion->query($query);
                    $rs = $execute->fetchAll();
                    foreach ($rs as $row){
                        echo '<tr>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
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
