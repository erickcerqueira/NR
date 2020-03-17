<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msgapaguser'] = "<p style='color:green;'><b>Usuário selecionado foi apagado com sucesso!</b></p>";
		header("Location: ../listar-usuario.php?msgapaguser=Usuario apagado com sucesso!");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'><b>Erro o usuário não foi apagado com sucesso</p></b>";
		header("Location: ../listar-usuario.php?msgapaguser=Usuario apagado com sucesso!");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'><b>Selecione um usuário e tente novamente!</p></b>";
	header("Location: ../listar-usuario.php?msgapaguser=Usuario apagado com sucesso!");
}
