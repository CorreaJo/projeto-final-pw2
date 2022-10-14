<?php

require "../../conexao.php";
require "../../models/fornecedor.php";
require "../../models/empregados.php";
require "../../models/usuario.php";

$con = conexao();
// crud usuarios
$selectUsuario = ListarTudoUsuario();
$resulUsuario = mysqli_query($con, $selectUsuario);
$linhaUsuario = mysqli_fetch_assoc($resulUsuario);
// crud fornecedor
$selectForne = ListarTudoFornecedor();
$resulForne = mysqli_query($con, $selectForne);
$linhaForne = mysqli_fetch_assoc($resulForne);
// crud empregados
$selectEmpregados = ListarTudoEmpregado();
$resulEmpregados = mysqli_query($con, $selectEmpregados);
$linhaEmpregados = mysqli_fetch_assoc($resulEmpregados);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../../public/css/cabecalho.css">
    <style>
        section {
            display: flex;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require "../../components/cabecalho.php"?>
    <h1>Dashboard Administrador</h1>
    <section>
        <div id="empregados">
            <h2>Todos os Funcionarios Cadastrados</h2>
            <a href="empregados/cadastroEmpregado.php">Cadastrar Empregados</a>
            <?php
                if(!$linhaEmpregados["idEmpregado"]){
                    ?>
                        <h3>Não há empregados cadastrados</h3>
                    <?php
                } else {
                    ?>
                        <h2>Dando erro</h2>
                    <?php
                }
            ?>
        </div>
        <div id="Fornecedores">
            <h2>Todos os Fornecedores Cadastrados</h2>
            <a href="fornecedor/cadastroFornecedor.php">Cadastrar Fornecedor</a>
            <?php
                if(!$linhaForne["idFornecedor"]){
                    ?>
                        <h3>Não há fornecedores cadastrados</h3>
                    <?php
                } else {
                    echo $linhaForne["nomeFornecedor"];
                }
            ?>
        </div>
        <div id="usuarios">
            <h2>Todos os Usuarios Cadastrados</h2>
            <a href="../usuario/cadastroUsuario.php">Cadastrar Usuario</a>
            <table border="1">
                <th>Nome</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Imagem</th>
                <th>Ações</th>
                    <?php
                        while($linhaUsuario){
                            ?>
                            <tr>
                                <td><?=$linhaUsuario["nome"]?></td>
                                <td><?=$linhaUsuario["endereco"]?></td>
                                <td><?=$linhaUsuario["email"]?></td>
                                <td><?=$linhaUsuario["telefone"]?></td>
                                <td><?=$linhaUsuario["cpf"]?></td>
                                <td><img src="../<?=$linhaUsuario["imagem"]?>" alt=""></td>
                                <td>
                                    <a style="color: black;" href="../../usuario/deletarUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Deletar</a>
                                    <a style="color: black;" href="../../usuario/updateFormUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Atualizar</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
            </table>
        </div>
    </section>
</body>
</html>