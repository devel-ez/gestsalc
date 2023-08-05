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
    <base href="<?php echo TemplateController::path(); ?>">

    <!-- Favicon -->
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
    <!-- DataTables -->
    <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="views/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/jszip/jszip.min.js"></script>
    <script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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
    if (isset($_SESSION["admin"])) : ?>

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
                        $routesArray[1] == "admins" ||
                        $routesArray[1] == "operadores" ||
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


    <?php endif ?>
</body>

</html>