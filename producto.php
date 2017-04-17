<button type="button" class="btn btn-success" id="btnNuevoAgregarProducto">
                <span class="glyphicon glyphicon-plus"></span> Nuevo
                   </button>


<table id="tblProducto">
    <thead>
        <tr>
            <th style="display:none"></th>
            <!--<th>Foto</th>-->
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Existencias</th>
            <th>Precio</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
                include './conexion.php';
                try {
                    $query = "SELECT * FROM tproducto";

                    $execute = $conexion->query($query);
                    $rs = $execute->fetchAll();
                    foreach ($rs as $row){
                        echo '<tr>';
                        echo '<td style="display:none">'.$row['idProducto'].'</td>';
                        echo '<td>'.$row['Producto'].'</td>';
                        echo '<td>'.$row['Descripcion'].'</td>';
                        echo '<td>'.$row['Existencias'].'</td>';
                        echo '<td>'.$row['Precio'].'</td>';
                       echo '<td><label  id="updateProducto"><img src="images/alt-editar-icono-5470-128.png" style="width:22px"/> Editar</label></td>';
                       echo '<td><label id="removeProducto"><img src="images/eliminar.gif" style="width:22px" /> Eliminar</label></td>';
                        echo '</tr>';
                    }

                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
    </tbody>
</table>

       

