<?php

require('force_justify.php');
include '../include/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = ("SELECT * FROM telefones WHERE id='$id'");

$busca = mysqli_query($conn, $sql);

$pdf = new PDF("P", "mm", "A4");
$pdf->AddPage('P', 'A4');
$pdf->SetFont('Arial', 'U', 13);
$pdf->SetFillColor(255, 255, 255);
//$pdf->Image('../img/logorelat.png',9,-9,60,50); //9,1 = posição e 60,50 = tamanho da imagem
//$pdf->Image('../img/logorelat.png',55,100,100,90); //9,1 = posição e 60,50 = tamanho da imagem
$pdf->SetTitle("Termo de Responsabilidade", 0);
$pdf->SetAuthor("Erick Cerqueira", 0);
$pdf->AliasNbPages('{np}');
$pdf->Ln(5);
$pdf->Cell(190, 5, utf8_decode('REGULAMENTO PARA O USO DO APARELHO CELULAR FORNECIDO PELA EMPRESA'), 2, 2, 2, 2);
$pdf->SetMargins(10, 20, 10);
$pdf->Ln(10);
// Print 2 MultiCells
$y = $pdf->GetY();
$pdf->SetFont('Arial', 'U', 10);
$pdf->MultiCell(190, 8, utf8_decode(''
                . '1.	A Empresa NOVA RIO SERVIÇOS GERAIS LTDA coloca um aparelho de telefonia CELULAR com carregador, de sua propriedade, para uso exclusivo em serviço, sendo permanentemente proibida a utilização de ambos os instrumentos de trabalho para fins particulares.
2.	Durante o período em que o aparelho CELULAR estiver à disposição do empregado, este será totalmente responsável pelo mesmo, aplicando-se todas as cláusulas do presente regulamento.
3.	Fica a critério de a Empresa determinar o tipo, o momento de troca ou compra de novo aparelho CELULAR em substituição ao entregue ao empregado.
4.	O empregado compromete-se a zelar pelo aparelho CELULAR, concordando em apresentar o mesmo à vistoria e devolvê-lo a empresa em caso de rescisão do contrato de trabalho ou quando solicitado e também durante o período em que estiver em gozo de férias.
5.	O empregado é responsável por efetuar reparos no aparelho, observando o termo de garantia, face aos danos por acidentes a que der causa, direta ou indiretamente, dolosa ou culposamente. 
6.	Em caso de perda, furto ou roubo do aparelho, o empregado se compromete, além de providenciar a realização do boletim de ocorrência, em caso de roubo ou furto, a comunicar imediatamente a empresa (Setor de TI), bem como entregar cópia do registro de ocorrência policial.
7.	Ocorrendo uma das hipóteses do item 6 do presente, fica o colaborador obrigado a ressarcir a empresa pelo valor constante da Nota Fiscal ou, caso prefira, poderá o colaborador adquirir um aparelho novo, do mesmo modelo, com a nota fiscal emitida em nome da Nova Rio Serviços Gerais Ltda e posteriormente, entregá-lo no Setor de TI, na caixa e lacrado para que a mesma possa proceder a inclusão do mesmo no sistema de patrimônio e anotar o número do IMEI do aparelho.
8.	No caso de roubo qualificado (art. 157, §2º do CP), poderá a empresa, após análise do registro de ocorrência policial a seu livre critério, isentar o colaborador de ressarcir ou substituir o aparelho roubado.

9.	O empregado, quando solicitado, se compromete a enviar para o Setor de TI, o mesmo aparelho que lhe foi entregue (mesmo número de IMEI), com todos os acessórios (Carregador), inclusive a caixa e manual, bem como o mesmo chip, sob pena de ficar responsável pelo ressarcimento de um novo aparelho, da mesma marca cor e modelo do que lhe foi entregue. 
10.	As ligações feitas no aparelho CELULAR para fins particulares serão descontadas em folha de pagamento ou quando da rescisão do contrato de trabalho, o que concorda e autoriza desde já, expressamente o empregado (art. 462, § 1º da CLT) ao assinar o presente termo. 
11.	Todo excedente de minutagem, utilização de torpedos, pacote de dados e chamadas interurbanas e deslocamentos serão descontados do funcionário em folha de pagamento o que concorda e autoriza desde já, expressamente o empregado (art. 462, § 1º da CLT) ao assinar o presente termo.
12.	A violação de qualquer uma das cláusulas deste regulamento pelo empregado acarretará infração contratual e poderá ser motivo para rescisão do contrato de trabalho por justa causa.
'), 0, 'L');

$pdf->Ln(5);

//$pdf->SetFont('Arial', 'B', 9);
//$pdf->Cell(38, 7, utf8_decode('Matrícula'), 0, 0, 'C');
//$pdf->Cell(38, 7, utf8_decode('Colaborador'), 0, 0, 'C');
//$pdf->Cell(38, 7, utf8_decode('Função'), 0, 0, 'C');
//$pdf->Cell(38, 7, utf8_decode('Setor'), 0, 0, 'C');
//$pdf->Cell(38, 7, utf8_decode('Cód. do Setor'), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode('Aparelho'), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode('Modelo'), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode('IMEI Chip'), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode('Nº da Linha'), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode('Plano'), 0, 0,'C');
$pdf->Ln();

while ($resultado = mysqli_fetch_array($busca)) {
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(16, 7, utf8_decode('Matrícula:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(17, 7, utf8_decode($resultado['matricula']), 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(21, 7, utf8_decode('Colaborador:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(26, 7, utf8_decode($resultado['colaborador']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(80, 7, utf8_decode('Função:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-44, 7, utf8_decode($resultado['funcao']), 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(9, 7, utf8_decode('Setor:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(20, 7, utf8_decode($resultado['setor']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(126, 7, utf8_decode('Cód. do Setor:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-83, 7, utf8_decode($resultado['codsetor']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Ln();
    $pdf->Cell(29, 7, utf8_decode('Tipo de Aparelho:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(30, 7, utf8_decode($resultado['aparelho']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(73, 7, utf8_decode('Modelo:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-46, 7, utf8_decode($resultado['modelo']), 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(20, 7, utf8_decode('Nº da Linha:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(23, 7, utf8_decode($resultado['ndalinha']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(96, 7, utf8_decode('IMEI do Chip:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-51, 7, utf8_decode($resultado['imeichip']), 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(19, 7, utf8_decode('Qtd. Dados:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(12, 7, utf8_decode($resultado['qtddados']), 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(120, 7, utf8_decode('Qtd. Minutos:'), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-83, 7, utf8_decode($resultado['qtdminutos']), 0, 0, 'C');
    $pdf->Ln(63);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(120, 7, utf8_decode($resultado['matricula']), 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(-40, 7, utf8_decode($resultado['colaborador']), 0, 0, 'C');
    $pdf->Line(40, 170, 170, 170);



//    $pdf->Cell(38, 7, utf8_decode($resultado['aparelho']), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode($resultado['modelo']), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode($resultado['imeichip']), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode($resultado['ndalinha']), 0, 0, 'C');
//    $pdf->Cell(38, 7, utf8_decode($resultado['qtddados']), 0, 0, 'C');
//    $pdf->Ln();
}
$pdf->Output();
?>

