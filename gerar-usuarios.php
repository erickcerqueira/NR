<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php
session_start();
include_once('include/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php
        include_once 'include/header.php';
        ?>
    <head>
    <body>
        <?php
        // Definimos o nome do arquivo que será exportado
        $arquivo = 'relatoriodeusuarios.xls';

        // Criamos uma tabela HTML com o formato da planilha
        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td colspan="8">Relatorio de Usuários</tr>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td><b>ID</b></td>';
        $html .= '<td><b>Nome</b></td>';
        $html .= '<td><b>Usuário</b></td>';
        $html .= '<td><b>E-mail</b></td>';
        $html .= '<td><b>Matrícula</b></td>';
        $html .= '<td><b>Cargo</b></td>';
        $html .= '<td><b>Nível de Acesso</b></td>';
        $html .= '<td><b>Data de Criação</b></td>';
        $html .= '</tr>';

        //Selecionar todos os itens da tabela 
        $result_excel = "SELECT * FROM usuarios";
        $resultado_excel = mysqli_query($conn, $result_excel);

        while ($row_excel = mysqli_fetch_assoc($resultado_excel)) {
            $html .= '<tr>';
            $html .= '<td>' . $row_excel["id"] . '</td>';
            $html .= '<td>' . $row_excel["nome"] . '</td>';
            $html .= '<td>' . $row_excel["usuario"] . '</td>';
            $html .= '<td>' . $row_excel["email"] . '</td>';
            $html .= '<td>' . $row_excel["matricula"] . '</td>';
            $html .= '<td>' . $row_excel["cargo"] . '</td>';
            $html .= '<td>' . $row_excel["acesso"] . '</td>';
            $html .= '<td>' . $row_excel["criadoem"] . '</td>';
            $html .= '</tr>';
            ;
        }
        // Configurações header para forçar o download
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Content-type: application/x-msexcel");
        header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
        header("Content-Description: PHP Generated Data");
        // Envia o conteúdo do arquivo
        echo $html;
        exit;
        ?>
    </body>
</html>