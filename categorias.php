<button class="btn btn-success" id="btnNuevoRegCategoria">
    <span class="glyphicon glyphicon-plus"></span> Nuevo
</button>


<table id="tblCategorias">

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
                        echo '<td><label  id="update"><img src="images/alt-editar-icono-5470-128.png" style="width:22px"/> Editar</label></td>';
                        echo '<td><label id="remove"><img src="images/eliminar.gif" style="width:22px" /> Eliminar</label></td>';
                        echo '</tr>';
                    }

                } catch (Exception $exc) {
                    echo $exc->getMessage();
                }
                ?>
            </tbody>
        </table>


</table>
