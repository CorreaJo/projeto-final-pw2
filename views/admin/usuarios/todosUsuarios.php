<?php

require "../../../conexao.php";
require "../../../models/usuario.php";

$con = conexao();
$select = ListarTudoUsuario();

$resul = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos Usuários</title>
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
</head>
<body>
    <?php require "../../../components/cabecalho.php"?>
    <h1>Todos os Usuários cadastrados</h1>

    <table border="1">
        <th>Nome</th>
        <th>Endereço</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CPF</th>
        <th>Imagem</th>
        <th>Ações</th>
            <?php
                while($linha = mysqli_fetch_assoc($resul)){
                    ?>
                    <tr>
                        <td><?=$linha["nome"]?></td>
                        <td><?=$linha["endereco"]?></td>
                        <td><?=$linha["email"]?></td>
                        <td><?=$linha["telefone"]?></td>
                        <td><?=$linha["cpf"]?></td>
                        <td><img src="../<?=$linha["imagem"]?>" alt=""></td>
                        <td>
                            <a style="color: black;" href="../../usuario/deletarUsuario.php?idUsuario=<?=$linha["idUsuario"]?>">Deletar</a>
                            <a style="color: black;" href="../../usuario/updateFormUsuario.php?idUsuario=<?=$linha["idUsuario"]?>">Atualizar</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
    </table>
</body>
</html>