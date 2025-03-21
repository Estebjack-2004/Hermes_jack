<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hermes jack beta</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes
    <script src="vistas/dist/js/demo.js"></script> -->
</head>


    <body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
    <div class="wrapper">

    </div>
</body>
</html> 

<!-- ./wrapper -->
<?php
    include "modulos/cabezote.php";
    include "modulos/menu.php";

    if  (isset($_GET["ruta"])){
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "Usuarios" ||
            $_GET["ruta"] == "Permisos" ||
            $_GET["ruta"] == "Inventario" ||
            $_GET["ruta"] == "RecepcionTraspaso" ||
            $_GET["ruta"] == "Reservas" ||
            $_GET["ruta"] == "Inmediatas" ||
            $_GET["ruta"] == "Autorizaciones" ||
            $_GET["ruta"] == "SolicitudesVen" ||
            $_GET["ruta"] == "Devoluciones" ||
            $_GET["ruta"] == "Salidas" ||
            $_GET["ruta"] == "Reportes"){

            include "modulos/".$_GET["ruta"].".php";
        }else{
            include "modulos/404.php";
        }

    }else{
        include "modulos/404.php";
    }

        include "modulos/footer.php";

    ?>
