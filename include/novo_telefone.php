<?php

$btnNovoTelefone = filter_input(INPUT_POST, 'btnNovoTelefone', FILTER_SANITIZE_STRING);
if ($btnNovoTelefone) {
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    //$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $result_telefone = "INSERT INTO telefones (colaborador, matricula, codsetor, setor, funcao, imeiaparelho, aparelho, modelo, ndeserie, 
        tipodefeito, situacaoaparelho, ndalinha, imeichip, qtddados, qtdminutos, compartilhado, situacaodalinha, endereco, cidade, cep, estado, termo, valor, datadecriacao) VALUES (
					'" . $dados['colaborador'] . "',
					'" . $dados['matricula'] . "',
					'" . $dados['codsetor'] . "',
                                        '" . $dados['setor'] . "',
                                        '" . $dados['funcao'] . "',
					'" . $dados['imeiaparelho'] . "',
					'" . $dados['aparelho'] . "',
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
    $resultado_usuario = mysqli_query($conn, $result_telefone);
    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "Telefone cadastrado com sucesso!";
        header("location: ../novo-telefone.php?msgtelefone=Telefone cadastrado com sucesso!");
    } else {
        $_SESSION['msgtelefone'] = "Erro ao cadastrar o telefone!";
    }
}
?>
