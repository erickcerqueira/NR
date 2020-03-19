<?php
include_once("include/conexao.php");

// ----------- Quantidade de Smartphones
$result_aparelhos_smartphones = "SELECT COUNT(aparelho) AS total FROM telefones WHERE aparelho='Smartphone'";
$resultado_aparelhos = mysqli_query($conn, $result_aparelhos_smartphones);
$valor_aparelhos_smartphones = mysqli_fetch_assoc($resultado_aparelhos);
$num_aparelhos_smartphones = $valor_aparelhos_smartphones['total'];
?>

<?php
// ----------- Quantidade de Aparelhos Comuns
$result_aparelho_comum = "SELECT COUNT(aparelho) AS total FROM telefones WHERE aparelho='Aparelho Comum'";
$resultado_aparelho_comum = mysqli_query($conn, $result_aparelho_comum);
$valor_comum = mysqli_fetch_assoc($resultado_aparelho_comum);
$num_aparelhos_comum = $valor_comum['total'];
?>

<?php
// ----------- Quantidade de Roteadores e Vivo Boxs
$result_vivobox = "SELECT COUNT(tipoequipamento) AS total FROM vivoboxs WHERE tipoequipamento='Roteador 3G/4G - Vivo Box'";
$resultado_vivobox = mysqli_query($conn, $result_vivobox);
$valor_vivo = mysqli_fetch_assoc($resultado_vivobox);
$num_vivobox = $valor_vivo['total'];
?>

<?php
// ----------- Custo Total Mensal
$result_total_mensal = "SELECT SUM(valor) AS total FROM telefones WHERE valor";
$resultado_total_mensal = mysqli_query($conn, $result_total_mensal);
$valor_total_mensal = mysqli_fetch_assoc($resultado_total_mensal);
$num_total_mensal = $valor_total_mensal['total'];
?>


<?php
// ----------- Quantidade Total de Dados Telefones
$result_total_dados_telefones = "SELECT SUM(qtddados) AS total FROM telefones WHERE qtddados";
$resultado_total_dados_telefones = mysqli_query($conn, $result_total_dados_telefones);
$valor_total_dados_telefones = mysqli_fetch_assoc($resultado_total_dados_telefones);
$num_total_dados_telefones = $valor_total_dados_telefones['total'];
?>

<?php
// ----------- Quantidade Total de Dados VIVO Box
$result_total_dados_vivobox = "SELECT SUM(qtddados) AS total FROM vivoboxs WHERE qtddados";
$resultado_total_dados_vivobox = mysqli_query($conn, $result_total_dados_vivobox);
$valor_total_dados_vivobox = mysqli_fetch_assoc($resultado_total_dados_vivobox);
$num_total_dados_vivobox = $valor_total_dados_vivobox['total'];
?>

<?php
// ----------- SOMA DE DADOS VIVO BOX + TELEFONES
$resultado_final = $num_total_dados_telefones+$num_total_dados_vivobox;
?>

<?php
// ----------- Quantidade Total de Minutos
$result_total_minutos = "SELECT SUM(qtdminutos) AS total FROM telefones WHERE qtdminutos";
$resultado_total_minutos = mysqli_query($conn, $result_total_minutos);
$valor_total_minutos = mysqli_fetch_assoc($resultado_total_minutos);
$num_total_minutos = $valor_total_minutos['total'];

//if($num_total_minutos <= 0){
//}else{
//echo "0";
//}
?>

<?php
// ----------- Quantidade de Aparelhos com Defeito
$result_aparelho_defeito = "SELECT COUNT(tipodefeito) AS total FROM telefones WHERE tipodefeito='Defeito'";
$resultado_aparelho_defeito = mysqli_query($conn, $result_aparelho_defeito);
$valor_aparelho_defeito = mysqli_fetch_assoc($resultado_aparelho_defeito);
$num_aparelho_defeito = $valor_aparelho_defeito['total'];
?>

<?php
// ----------- Quantidade de Linhas Canceladas
$result_linha_cancelada = "SELECT COUNT(situacaodalinha) AS total FROM telefones WHERE situacaodalinha='Cancelada'";
$resultado_linha_cancelada = mysqli_query($conn, $result_linha_cancelada);
$valor_linha_cancelada = mysqli_fetch_assoc($resultado_linha_cancelada);
$num_linha_cancelada = $valor_linha_cancelada['total'];
?>




