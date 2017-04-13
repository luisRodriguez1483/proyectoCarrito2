<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        

        <script src="js/jquery-3.2.0.js" type="text/javascript"></script>
       <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
        <link rel="stylesheet"  href="css/style.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/estilosform.css"/>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css"/>

        <script src="gestionesjs/AdministracionP.js" type="text/javascript"></script>
        <script src="gestionesjs/usuarios.js" type="text/javascript"></script>
        <script src="gestionesjs/proveedores.js" type="text/javascript"></script>
          
    </head>

    <?php
     session_start();
    if(empty($_SESSION['idUsuario']) && empty($_SESSION['Tipo']) && empty($_SESSION['Usuario'])){
    header("Location:index.php");
    }
    ?>
    <body>
        <section> 

            <div id="contenido" ></div> 
        </section>


        <nav>
            <h1>¡ Bienvenido <?php  echo  $_SESSION['Usuario'];?> !</h1>
<ul>
            <?php if($_SESSION['Tipo'] == "Administrador"){?>
            
                <li>
                    <div class="barra"></div>
                    <p id="usuario">Usuarios</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p id="proveedores">Proveedores</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p>Categorias</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p>Productos</p>
                </li>
                
            
            <?php }else {?>
                <li>
                    <div class="barra"></div>
                    <p id = "proveedores">Proveedores</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p>Categorias</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p>Productos</p>
                </li>

<?php } ?>

                <li>
                    <div class="barra"></div>
                    <p id="slider">Slider</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p id="btnSalir">Salir</p>
                </li>   
                </ul>
            </nav>
    </body>
</html>
