<button class="btn btn-success" id="btnNuevoRegCategoria">
    <span class="glyphicon glyphicon-plus"></span> Nuevo
</button>


<table id="tblCategorias">

    <thead>
        <tr>
            <th style="display:none"></th>
            <th>Categoria</th>
            <th>Acciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
                include './conexion.php';
                try {
                    $query = "SELECT * FROM tcategoria";

                    $execute = $conexion->query($query);
                    $rs = $execute->fetchAll();
                    foreach ($rs as $row){
                        echo '<tr>';
                        echo '<td style="display:none">'.$row['idCategoria'].'</td>';
                        echo '<td>'.$row["Categoria"].'</td>';
                        echo '<td><label  id="updateCategoria"><img src="images/alt-editar-icono-5470-128.png" style="width:22px"/> Editar</label></td>';
                        echo '<td><label id="removeCategoria"><img src="images/eliminar.gif" style="width:22px" /> Eliminar</label></td>';
                        echo '</tr>';
                    }

                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
    </tbody>
</table>
