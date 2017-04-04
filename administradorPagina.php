
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script src="js/jquery-3.2.0.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
        <link rel="stylesheet"  href="css/style.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/estilosform.css"/>
        <script src="gestionesjs/administracion.js" type="text/javascript"></script>
        <script src="gestionesjs/Usuarios.js" type="text/javascript"></script>
          
    </head>

    <?php
     session_start();
    if(empty($_SESSION['idUsuario']) && empty($_SESSION['Tipo'])){
    header("Location:index.php");
    }

    ?>
    <body>
        <section> 
            <div id="contenido" ></div> 
        </section>
        <div id="modal"></div>
        <nav>
            <h1>¡ Bienvenido <?php  echo  $_SESSION['idUsuario'];?> !</h1>
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
                    <p id="btnSalir"></a>Salir</p>
                </li>   
                </ul>
            </nav>
    </body>
</html>
