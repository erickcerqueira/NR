<?php
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if ($btnCadUsuario) {
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $result_usuario = "INSERT INTO usuarios (nome, usuario, email, senha, matricula, cargo, acesso, criadoem) VALUES (
                                        '" . $dados['nome'] . "',
					'" . $dados['usuario'] . "',
					'" . $dados['email'] . "',
					'" . $dados['senha'] . "',
                                        '" . $dados['matricula'] . "',
                                        '" . $dados['cargo'] . "',
					'" . $dados['acesso'] . "',
                                            NOW() 
					)";
    $resultado_usario = mysqli_query($conn, $result_usuario);
    if (mysqli_insert_id($conn)) {
        $_SESSION['msguser'] = "Usuário cadastrado com sucesso!";
        header("Location: ../novo-usuario.php?msgusuario=Usuário cadastrado com sucesso!");
    } else {
        $_SESSION['msguser'] = "Erro ao cadastrar o usuário!";
    }
}
?>
