<button type="button" class="btn btn-success" id="btnNuevoAgregarProve">
                <span class="glyphicon glyphicon-plus"></span> Nuevo
                   </button>


<table id="tblProveedor">
    <thead>
        <tr>
            <th style="display:none"></th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones.....</th>
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
                       echo '<td style="display:none">'.$row['idProveedor'].'</td>';
                        echo '<td>'.$row['empresa'].'</td>';
                        echo '<td>'.utf8_encode($row['contacto']).'</td>';
                        echo '<td>'.$row['telefono'].'</td>';
                        echo '<td>'.$row['correo'].'</td>';
                       echo '<td><label  id="updateProveedor"><img src="images/alt-editar-icono-5470-128.png" style="width:22px"/> Editar</label></td>';
                       echo '<td><label id="removeProveedor"><img src="images/eliminar.gif" style="width:22px" /> Eliminar</label></td>';
                        echo '</tr>';
                    }

                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
    </tbody>
</table>
