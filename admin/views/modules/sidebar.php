<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link navbar-warning">
        <img src="views/assets/img/caveira.png"  alt="Caveira Logo" style="width: 56px; height: 70px;">
        <span class="brand-text font-weight-dark" style="padding-left: 25px; font-weight:bold; ">GestSALC</span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="views/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">2ºSgt Velêz</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link <?php if ($routesArray[1] == "") : ?>active<?php endif ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Início
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="processos" class="nav-link <?php if ($routesArray[1] == "processos") : ?>active<?php endif ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Processos
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="administradores" class="nav-link <?php if ($routesArray[1] == "administradores") : ?>active<?php endif ?>">
                        <i class="fas fa-user-cog"></i>
                        <p>Administradores</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="operadores" class="nav-link <?php if ($routesArray[1] == "operadores") : ?>active<?php endif ?>">
                        <i class="fas fa-user-tie"></i>
                        <p>Operadores</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>