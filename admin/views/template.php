<?php
session_start();
/* -------------------------------------------------------------------------- */
/*                          Capturar as rotas da URL                          */
/* -------------------------------------------------------------------------- */
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/* -------------------------------------------------------------------------- */
/*                       Limpar a URL para variaveis GET                      */
/* -------------------------------------------------------------------------- */
foreach ($routesArray as $key => $value) {

    $value = explode("?", $value)[0];
    $routesArray[$key] = $value;
}


?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GestSALC</title>
    <link rel="icon" href="views/assets/img/martelo.png">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
    <!-- Template css -->
    <link rel="stylesheet" href="views/assets/custom/template/template.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed ">

    <?php
    if (!isset($_SESSION["admin"])) {

        include "views/pages/login/login.php";
        echo '</body></head>';
        return;
    }
    ?>
    <?php
    if(isset($_SESSION["admin"])): ?>

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include "views/modules/navbar.php";
        ?>
        <!-- /.navbar -->

        <!-- Sidebar -->
        <?php
        include "views/modules/sidebar.php";
        ?>
        <!-- /.sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php


            // echo '<pre>';
            // print_r($routesArray);
            // echo '</pre>';

            if (!empty($routesArray[1])) {
                if (
                    $routesArray[1] == "processos" ||
                    $routesArray[1] == "administradores" ||
                    $routesArray[1] == "operadores"||
                    $routesArray[1] == "logout"
                ) {
                    include "views/pages/" . $routesArray[1] . "/" . $routesArray[1] . ".php";
                } else {
                    include "views/pages/404/404.php";
                }
            } else {
                // include "views/pages/inicio/inicio.php";


            }
            ?>
            <!-- Content Header (Page header) -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php include "views/modules/footer.php"; ?>
        <!-- /.Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="views/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="views/assets/plugins/adminlte/js/demo.js"></script>
<?php endif?>
</body>

</html>