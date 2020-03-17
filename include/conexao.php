<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "nrtelefonia";

//Conexão com o Banco
$conn = mysqli_connect($servidor, $user, $senha, $dbname);

//function mostraTodosUsuarios() {
//    $result_pdf = "SELECT * FROM usuarios";
//    $resultado_pdf = mysqli_query($conn, $result_pdf);
//}
