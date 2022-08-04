<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Concesionario | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistas/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistasbower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistas/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistas/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="http://localhost/Concesionario/admin/Vistas/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
         <script src="http://localhost/Concesionaria/Vistas/js/usuarios.js"></script>
    </head>
    <body class="hold-transition skin-green-light sidebar-mini login-page ">

        <div class="wrapper">
            <?php
            if (isset($_SESSION["Ingresar"]) && $_SESSION["Ingresar"] == true) {

                echo '<div class="wrapper">';

                include "modulos/cabecera.php";

                if ($_SESSION["rol"] == "Administrador") {

                    include "modulos/menu.php";
                } else {

                    include "modulos/menuV.php";
                }


                $url = array();

                if (isset($_GET["url"])) {

                    $url = explode("/", $_GET["url"]);

                    if ($url[0] == "Inicio" || $url[0] == "Salir"|| $url[0] == "Mis-Datos"|| $url[0] == "Usuarios"|| $url[0] == "Graficas") {

                        include "modulos/" . $url[0] . ".php";
                    }
                } else {

                    include "modulos/Inicio.php";
                }

                echo '</div>';
            } else if (isset($_GET["url"])) {

                if ($_GET["url"] == "Ingresar") {

                    include "modulos/Ingresar.php";
                }
            } else {

                include "modulos/Ingresar.php";
            }
            ?>


<?php

   include 'modulos/footer.php';
?>

            <!-- jQuery 3 -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="http://localhost/Concesionario/admin/Vistas/dist/js/adminlte.min.js"></script>
            <!-- Sparkline -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
            <!-- jvectormap  -->
            <script src="http://localhost/Concesionario/admin/Vistas/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="http://localhost/Concesionario/admin/Vistas/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <!-- SlimScroll -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- ChartJS -->
            <script src="http://localhost/Concesionario/admin/Vistas/bower_components/Chart.js/Chart.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="http://localhost/Concesionario/admin/Vistas/dist/js/pages/dashboard2.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="http://localhost/Concesionario/admin/Vistas/dist/js/demo.js"></script>
            <script src="http://localhost/Concesionaria/admin/Vistas/js/usuarios.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".sidebar-menu").tree();
                })

            </script>

    </body>
</html>
