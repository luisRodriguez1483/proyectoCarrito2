<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" media="screen"/>
        <script src="gestionesjs/AdministracionP.js" type="text/javascript"></script>

    </head>
    <body>


                <button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#myModal">
                   <!-- <span class="glyphicon glyphicon-plus"></span>--> Nuevo
                </button>

                <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



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


        
    </body>
</html>
