<?php 
$btnNovoVivoBox = filter_input(INPUT_POST, 'btnNovoVivoBox', FILTER_SANITIZE_STRING);
if ($btnNovoVivoBox) {
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    //$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $result_vivobox = "INSERT INTO vivoboxs (colaborador, matricula, codsetor, setor, funcao, tipoequipamento, modelo, ndeserie, 
        tipodefeito, situacaoaparelho, ndalinha, imeichip, qtddados, qtdminutos, compartilhado, situacaodalinha, endereco, cidade, cep, estado, termo, valor, criadoem) VALUES (
					'" . $dados['colaborador'] . "',
					'" . $dados['matricula'] . "',
					'" . $dados['codsetor'] . "',
                                        '" . $dados['setor'] . "',
                                        '" . $dados['funcao'] . "',
					'" . $dados['tipoequipamento'] . "',
					'" . $dados['modelo'] . "',
					'" . $dados['ndeserie'] . "',
					'" . $dados['tipodefeito'] . "',
					'" . $dados['situacaoaparelho'] . "',
					'" . $dados['ndalinha'] . "',
                                        '" . $dados['imeichip'] . "',
					'" . $dados['qtddados'] . "',
                                        '" . $dados['qtdminutos'] . "',
					'" . $dados['compartilhado'] . "',
					'" . $dados['situacaodalinha'] . "',
					'" . $dados['endereco'] . "',
					'" . $dados['cidade'] . "',
					'" . $dados['cep'] . "',
                                        '" . $dados['estado'] . "',
                                        '" . $dados['termo'] . "',
                                        '" . $dados['valor'] . "',
                                            NOW()  
					)";
    $resultado_vivobox = mysqli_query($conn, $result_vivobox);
    if (mysqli_insert_id($conn)) {
        $_SESSION['msgvivobox'] = "Vivo Box cadastrado com sucesso!";
        header("Location: ../novo-vivo-box.php?msgvivobox=Vivo Box cadastrado com sucesso!");
    } else {
        $_SESSION['msgvivobox'] = "Erro ao cadastrar o Vivo Boxe!";
    }
}
?>