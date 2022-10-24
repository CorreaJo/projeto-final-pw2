<?php

function conexao(){
    $conexao = mysqli_connect("50.116.86.60", "cordwe98_pw2", "#Joao09238", "cordwe98_pw2");

    if(!$conexao) {
        die("Conexão falhou: ". mysqli_connect_error());
    }
    return $conexao;
}

?>