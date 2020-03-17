<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php
        include_once 'include/header.php';
        ?>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> <!-- Imagem da Página de Login, etc... -->
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">

                                            <div align = "center"> <img src = "img/novario.png" width = "329" height = "223"></div>
                                        </div>
                                        <form class="user" method="POST" action="include/valida.php">
                                            <div class="form-group">
                                                <input type="text" name="usuario" class="form-control form-control-user" placeholder="Insira seu usuário...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="senha" class="form-control form-control-user"  placeholder="Senha">
                                            </div>
                                            <div class="form-group text-center animated--grow-in" >
                                                <?php
                                                if (isset($_SESSION['msg'])) {
                                                    echo $_SESSION['msg'];
                                                    unset($_SESSION['msg']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                                </div>
                                            </div>
                                            <input type="submit" name="btnLogin" value="Conectar-se" class="btn btn-primary btn-user btn-block" >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

</html>
