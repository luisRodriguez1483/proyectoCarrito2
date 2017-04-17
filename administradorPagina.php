<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        

        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
       <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
       <script src="js/jquery.pleaseWait.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
        <link rel="stylesheet"  href="css/style.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css"/>
        <link rel="stylesheet" type="text/css" href="css/estilosform.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>

        <script src="gestionesjs/AdministracionP.js" type="text/javascript"></script>
        <script src="gestionesjs/Usuarios.js" type="text/javascript"></script>
        <script src="gestionesjs/proveedores.js" type="text/javascript"></script>
        <script src="gestionesjs/Categorias.js" type="text/javascript"></script>
         <script src="gestionesjs/Productos.js" type="text/javascript"></script>
          
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
            <div id="modal"></div>

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
                    <p id="categoria">Categorias</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p id="producto">Productos</p>
                </li>
                
            
            <?php }else {?>
                <li>
                    <div class="barra"></div>
                    <p id = "proveedores">Proveedores</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p id="categoria" onclick="categorias();">Categorias</p>
                </li>
                <li>
                    <div class="barra"></div>
                    <p id="producto" onclick="productos();">Productos</p>
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
