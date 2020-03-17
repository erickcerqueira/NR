<?php

include 'fpdf/fpdf.php';
include 'include/conexao.php';

$sql = ("SELECT * FROM telefones");
$busca = mysqli_query($conn, $sql);

$pdf = new FPDF("P", "mm", "A4");
$pdf->SetMargins(1, 20, 1);
$pdf->SetTitle("Gerador de Relatorios", 0);
$pdf->SetAuthor("Erick Cerqueira", 0);
$pdf->AliasNbPages('{np}');
#$pdf->SetMargins(10, 20, 10);
$pdf->AddPage('L', 'A4');
$pdf->Image('img/logorelat.png', 9, 1, 60, 50); //9,1 = posição e 60,50 = tamanho da imagem
$pdf->setFont('Arial', 'B', 16);
$pdf->Cell(180, 10, utf8_decode('Relatório de Telefones'), 10, 10, 0, 0);
$pdf->Ln(8);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(8, 7, utf8_decode('ID'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Colaborador'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Matrícula'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Código do Setor'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Setor'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Função'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Aparelho'), 1, 0, 'C');
$pdf->Cell(38, 7, utf8_decode('Modelo'), 1, 0, 'C');


$pdf->Ln();

while ($resultado = mysqli_fetch_array($busca)) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(8, 7, utf8_decode($resultado['id']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['colaborador']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['matricula']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['codsetor']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['setor']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['funcao']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode($resultado['aparelho']), 1, 0, 'C');
    $pdf->Cell(38, 7, utf8_decode('modelo'), 1, 0, 'C');

    $pdf->Ln();
}

//$pdf->Output('relatoriodetelefones.pdf', 'D');
$pdf->Output();

