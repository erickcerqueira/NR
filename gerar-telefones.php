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
        $arquivo = 'relatoriodetelefones.xls';

        // Criamos uma tabela HTML com o formato da planilha
        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td colspan="23">Relatorio de Telefones</tr>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td><b>ID</b></td>';
        $html .= '<td><b>Colaborador</b></td>';
        $html .= '<td><b>Matrícula</b></td>';
        $html .= '<td><b>Cód. do Setor</b></td>';
        $html .= '<td><b>Setor</b></td>';
        $html .= '<td><b>Função</b></td>';
        $html .= '<td><b>IMEI Aparelho</b></td>';
        $html .= '<td><b>Aparelho</b></td>';
        $html .= '<td><b>Modelo</b></td>';
        $html .= '<td><b>Nº de Série</b></td>';
        $html .= '<td><b>Tipo de Defeito</b></td>';
        $html .= '<td><b>Situação do Aparelho</b></td>';
        $html .= '<td><b>Nº da Linha</b></td>';
        $html .= '<td><b>IMEI Chip</b></td>';
        $html .= '<td><b>Qtd. Dados</b></td>';
        $html .= '<td><b>Qtd. Minutos</b></td>';
        $html .= '<td><b>Compartilhado</b></td>';
        $html .= '<td><b>Situação da Linha</b></td>';
        $html .= '<td><b>Valor Mensal</b></td>';
        $html .= '<td><b>Endereço</b></td>';
        $html .= '<td><b>CEP</b></td>';
        $html .= '<td><b>Estado</b></td>';
        $html .= '<td><b>Termo</b></td>';
        $html .= '<td><b>Data de Criação</b></td>';
        $html .= '</tr>';

        //Selecionar todos os itens da tabela 
        $result_excel = "SELECT * FROM telefones";
        $resultado_excel = mysqli_query($conn, $result_excel);

        while ($row_excel = mysqli_fetch_assoc($resultado_excel)) {
            $html .= '<tr>';
            $html .= '<td>' . $row_excel["id"] . '</td>';
            $html .= '<td>' . $row_excel["colaborador"] . '</td>';
            $html .= '<td>' . $row_excel["matricula"] . '</td>';
            $html .= '<td>' . $row_excel["codsetor"] . '</td>';
            $html .= '<td>' . $row_excel["setor"] . '</td>';
            $html .= '<td>' . $row_excel["funcao"] . '</td>';
            $html .= '<td>' . $row_excel["imeiaparelho"] . '</td>';
            $html .= '<td>' . $row_excel["aparelho"] . '</td>';
            $html .= '<td>' . $row_excel["modelo"] . '</td>';
            $html .= '<td>' . $row_excel["ndeserie"] . '</td>';
            $html .= '<td>' . $row_excel["tipodefeito"] . '</td>';
            $html .= '<td>' . $row_excel["situacaoaparelho"] . '</td>';
            $html .= '<td>' . $row_excel["ndalinha"] . '</td>';
            $html .= '<td>' . $row_excel["imeichip"] . '</td>';
            $html .= '<td>' . $row_excel["qtddados"] . '</td>';
            $html .= '<td>' . $row_excel["qtdminutos"] . '</td>';
            $html .= '<td>' . $row_excel["compartilhado"] . '</td>';
            $html .= '<td>' . $row_excel["situacaodalinha"] . '</td>';
            $html .= '<td>' . $row_excel["valor"] . '</td>';
            $html .= '<td>' . $row_excel["endereco"] . '</td>';
            $html .= '<td>' . $row_excel["cep"] . '</td>';
            $html .= '<td>' . $row_excel["estado"] . '</td>';
            $html .= '<td>' . $row_excel["termo"] . '</td>';
            $html .= '<td>' . $row_excel["datadecriacao"] . '</td>';
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