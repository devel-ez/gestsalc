<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administradores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item active">Administradores</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">

        <?php
        if (isset($routesArray[2])) {


            if ($routesArray[2] == "new" || $routesArray[2] == "edit") {

                include_once "actions/" . $routesArray[2] . ".php";
            }
        } else {


            include_once "actions/list.php";
        }

        ?>

    </div>
</section>
<!-- /.content -->