<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "nrtelefonia";

//Conexão com o Banco
$conn = mysqli_connect($servidor, $user, $senha, $dbname);
    
// Receber REquisição
$requestData = $_REQUEST;


// indice da coluna  na tabela  visualizar resultado
$columns = array(
    array('0' => 'colaborador'),
    array('1' => 'matricula'),
    array('2' => 'codsetor'),
    array('3' => 'setor'),
    array('4' => 'funcao'),
    array('5' => 'imeiaparelho'),
    array('6' => 'aparelho'),
    array('7' => 'modelo'),
    array('8' => 'ndeserie'),
    array('9' => 'tipodefeito'),
    array('10' => 'situacaoaparelho'),
    array('11' => 'ndalinha'),
    array('12' => 'imeichip'),
    array('13' => 'qtddados'),
    array('14' => 'qtdminutos'),
    array('15' => 'compartilhado'),
    array('16' => 'situacaodalinha'),
    array('17' => 'valor'),
    array('18' => 'endereco'),
    array('19' => 'cidade'),
    array('20' => 'cep'),
    array('21' => 'estado'),
    array('22' => 'termo'),
    array('23' => 'datadecriacao'),
);

//OBtendo registro de números
$result_user = "SELECT * FROM usuarios";
$resultado_user = mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

// Obter os dados a serem apresentados
$result_telefones = "SELECT * FROM usuarios WHERE 1=1";
if (!empty($requestData['search']['value'])) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
    $result_usuarios .= " AND ( colaborador LIKE '" . $requestData['search']['value'] . "%' ";
    $result_usuarios .= " OR matricula LIKE '" . $requestData['search']['value'] . "%' ";
    $result_usuarios .= " OR setor LIKE '" . $requestData['search']['value'] . "%' )";
    $result_usuarios .= " OR codsetor LIKE '" . $requestData['search']['value'] . "%' )";
    $result_usuarios .= " OR termo LIKE '" . $requestData['search']['value'] . "%' )";
    $result_usuarios .= " OR datadecriacao LIKE '" . $requestData['search']['value'] . "%' )";
}

$resultado_telefones = mysqli_query($conn, $result_telefones);
$totalFiltered = mysqli_num_rows($resultado_telefones);

//Ordernar resultado
$result_telefones .= "ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
$resultado_telefones = mysqli_query($conn, $result_telefones);

// Ler e criar o array de dados
$dados = array();
while ($row_telefones = mysqli_fetch_array($resultado_telefones)) {
    $dado = array();
    $dado[] = $row_telefones["id"];
    $dado[] = $row_telefones["colaborador"];
    $dado[] = $row_telefones["matricula"];
    $dado[] = $row_telefones["codsetor"];
    $dado[] = $row_telefones["setor"];
    $dado[] = $row_telefones["funcao"];
    $dado[] = $row_telefones["imeiaparelho"];
    $dado[] = $row_telefones["aparelho"];
    $dado[] = $row_telefones["modelo"];
    $dado[] = $row_telefones["ndeserie"];
    $dado[] = $row_telefones["tipodefeito"];
    $dado[] = $row_telefones["situacaoaparelho"];
    $dado[] = $row_telefones["ndalinha"];
    $dado[] = $row_telefones["imeichip"];
    $dado[] = $row_telefones["qtddados"];
    $dado[] = $row_telefones["qtdminutos"];
    $dado[] = $row_telefones["compartilhado"];
    $dado[] = $row_telefones["situacaodalinha"];
    $dado[] = $row_telefones["valor"];
    $dado[] = $row_telefones["endereco"];
    $dado[] = $row_telefones["cidade"];
    $dado[] = $row_telefones["cep"];
    $dado[] = $row_telefones["estado"];
    $dado[] = $row_telefones["termo"];
    $dado[] = $row_telefones["datadecriacao"];
    $dados[] = $dado;
}

//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
    "draw" => intval($requestData['draw']), //para cada requisição é enviado um número como parâmetro
    "recordsTotal" => intval($qnt_linhas), //Quantidade de registros que há no banco de dados
    "recordsFiltered" => intval($totalFiltered), //Total de registros quando houver pesquisa
    "data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json