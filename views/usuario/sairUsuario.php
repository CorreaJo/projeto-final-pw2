<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["senha"]);
unset($_SESSION["nome"]);
unset($_SESSION["cpf"]);
unset($_SESSION["telefone"]);
unset($_SESSION["imagem"]);
unset($_SESSION["endereco"]);

header("location: ../index.php");
?>