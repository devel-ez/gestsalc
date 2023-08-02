<div class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Gest</b>SALC</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>

            <form method="post" class="needs-validation was-validate" novalidate>
                    <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="loginEmail" onchange="validateJS(event,'email')" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">A mesagem está no formularios.js</div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="loginPassword" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <?php

                    require_once "controllers/admins.controller.php";

                    $login = new AdminsController();
                    $login->login();
                    ?>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Manter conectado
                                </label>
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-dark btn-block">Logar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>
<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Validação do bootstrap e personalizada -->
<script src="views/assets/custom/formularios/formularios.js"></script>
