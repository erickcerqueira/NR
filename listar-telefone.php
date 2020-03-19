<?php
session_start();
if (!empty($_SESSION['id'])) {
    //echo "Olá " . $_SESSION['nome'] . ", Bem vindo <br>";
} else {
    $_SESSION['msg'] = "Por favor, conecte-se!";
    header("Location: login.php");
}
include_once("include/conexao.php")
?>

<?php
$result_tel = "SELECT * FROM telefones ORDER BY id ASC";
$resultado_tel = mysqli_query($conn, $result_tel);
//while ($row_linha = mysqli_fetch_assoc($resultado_user)) {
//}
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

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <?php
                include_once('include/sidebar.php');
                ?>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <?php
                include_once('include/menu.php');
                ?>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar.." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler ú· 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun ú· 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez ú· 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog ú· 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "Olá, " . $_SESSION['nome']; ?></span>
                                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Meu Perfil
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Configurações
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="include/logout.php" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800">Lista de Telefones</h1>

                        <div class="form-group">
                            <?php
                            if (isset($_GET['msgapagtelefone'])) {
                                echo $_GET['msgapagtelefone'];
                                unset($_GET['msgapagtelefone']);
                            }
                            ?>
                        </div> 
                        <div class="card shadow mb-4">                            
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Informações</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-sm" id="telefone">
                                        <thead>
                                            <tr style="white-space: nowrap;">
                                                <th scope="col" class="text-center">ID</th>
                                                <th scope="col" class="text-center">Colaborador</th>
                                                <th scope="col" class="text-center">Matrícula</th>
                                                <th scope="col" class="text-center">Cód. do Setor</th>
                                                <th scope="col" class="text-center">Setor</th>
                                                <th scope="col" class="text-center">Função</th>
                                                <th scope="col" class="text-center">IMEI Aparelho</th>                                    
                                                <th scope="col" class="text-center">Aparelho</th>
                                                <th scope="col" class="text-center">Modelo</th>   
                                                <th scope="col" class="text-center">Nº de Série</th>  
                                                <th scope="col" class="text-center">Tipo de Defeito</th>
                                                <th scope="col" class="text-center">Situação do Aparelho</th>  
                                                <th scope="col" class="text-center">Linha</th>
                                                <th scope="col" class="text-center">IMEI Chip</th>
                                                <th scope="col" class="text-center">Dados</th>
                                                <th scope="col" class="text-center">Minutos</th>  
                                                <th scope="col" class="text-center">Compartilhado</th>  
                                                <th scope="col" class="text-center">Situação da Linha</th>  
                                                <th scope="col" class="text-center">Valor Mensal</th>  
                                                <th scope="col" class="text-center">Endereço</th>  
                                                <th scope="col" class="text-center">Cidade</th>  
                                                <th scope="col" class="text-center">CEP</th>  
                                                <th scope="col" class="text-center">Estado</th> 
                                                <th scope="col" class="text-center">Termo</th>  
                                                <th scope="col" class="text-center">Data de Criação</th>  
                                                <th scope="col" class="text-center">Ações</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row_tel = mysqli_fetch_assoc($resultado_tel)) {
                                                ?>  
                                                <tr style="white-space: nowrap;">
                                                    <th scope="row" class="text-center"><?php echo $row_tel['id']; ?></th>
                                                    <td class="text-center"><?php echo $row_tel['colaborador']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['matricula']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['codsetor']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['setor']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['funcao']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['imeiaparelho']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['aparelho']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['modelo']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['ndeserie']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['tipodefeito']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['situacaoaparelho']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['ndalinha']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['imeichip']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['qtddados']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['qtdminutos']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['compartilhado']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['situacaodalinha']; ?></td>
                                                    <td class="text-center">R$<?php echo $row_tel['valor']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['endereco']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['cidade']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['cep']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['estado']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['termo']; ?></td>
                                                    <td class="text-center"><?php echo $row_tel['datadecriacao']; ?></td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary">Ações</button>
                                                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="include/editar-telefone.php?id=<?php echo $row_tel['id']; ?>">Modificar</a>
                                                                <a class="dropdown-item" href="">Visualizar</a>
                                                                <a class="dropdown-item" href="include/apagar-telefone.php?id=<?php echo $row_tel['id']; ?>">Excluir</a>
                                                                <a class="dropdown-item" href="fpdf/gerar-termo-telefone.php?id=<?php echo $row_tel['id']; ?>" target="_blank">Gerar Termo</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Anexar Termo</a>
                                                            </div>
                                                        </div><!--
                                                        <div class="btn-group">
                                                            <span class="d-none d-md-block">
                                                                <a href="include/editar-telefone.php?id=<?php echo $row_tel['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                                                <a href="fpdf/gerar-termo-telefone.php?id=<?php echo $row_tel['id']; ?>" class="btn btn-info btn-sm" target="_blank">Termo</a>
                                                                <a href="include/apagar-telefone.php?id=<?php echo $row_tel['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                                                            </span>
                                                        </div>-->
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody> 
                                    </table>
                                    <!--
                                    <nav aria-label="paginacao">
                                        <ul class="pagination pagination-sm justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Primeira</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Ãltima</a>
                                            </li>
                                        </ul>
                                    </nav>-->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php
                include_once 'include/footer.php';
                ?>
            </div>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h5 class="modal-title" id="exampleModalLabel">DESCONECTAR</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Ã</span>
                    </button>
                </div>
                <div class="modal-body">Tem certeza de que deseja sair do sistema?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="include/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ApagarRegistro" tabindex="-1" role="dialog" aria-labelledby="ApagarRegistroLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ITEM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja excluir o item selecionado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Apagar</button>
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

    <!-- Ajuste no datatables, foi comentado o trecho do código que representava a paginação pra deixar a paginação do datatables
agir, e aqui abaixo está o código que faz o datatables funcionar, ainda será necessário ajustar o código do datatables pra
poder traduzir as informações e ajustar o design pelo css -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">


    <script>
        $(document).ready(function () {
            $('#telefone').DataTable();
        });
        $("#telefone").dataTable({
            "bJQueryUI": true,
            "oLanguage": {
                "sProcessing": "Processando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "Não foram encontrados resultados",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
                "sInfoFiltered": "",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Seguinte",
                    "sLast": "Último"
                }
            }
        })
    </script>

</body>

</html>
