<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bancodedados = "formulario";


    //criando conexão
    $conexao = new mysqli($servidor, $usuario, $password, $bancodedados);

    // teste a conexão
    if ($conexao->connect_errno) {
    echo "FALHA NA CONEXAO: (" . $conexao->connect_errno . ") " . $conexao->connect_errno;
    }else{
    /*libere o comentario para testa a conexao
    echo "Funcionando";
    */
    }

?>