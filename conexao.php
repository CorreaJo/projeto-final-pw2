<?php

function conexao(){
    $conexao = mysqli_connect("localhost:3306", "cordwe98_PW2", "#Joao09238", "cordwe98_pw2");

    if(!$conexao) {
        die("Conexão falhou: ". mysqli_connect_error());
    }
    return $conexao;
}

?>