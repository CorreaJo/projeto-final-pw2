<?php

require "../../conexao.php";
require "../../models/usuario.php";

$idUsuario = $_GET["idUsuario"];

$con = conexao();
$select = ListarUsuario($idUsuario);

$resul = mysqli_query($con, $select);
$linha = mysqli_fetch_assoc($resul)
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Conta</title>
    <link rel="stylesheet" href="../../public/css/forms.css">
</head>
<body>
    <section>
        <div class="cadastro">
            <h1>Atualizar Conta</h1>
            <form action="atualizarUsuario.php" method="POST">
                <input type="text"  name="nome" placeholder="Seu nome" value="<?=$linha["nome"]?>">
                <input type="text" name="endereco" value="<?=$linha["endereco"]?>">
                <input type="tel" 
                maxlength="11" name="telefone" placeholder="Seu telefone" value="<?=$linha["telefone"]?>">
                <input type="email" name="email" placeholder="Email" value="<?=$linha["email"]?>">
                <input type="text" name="cpf" placeholder="Seu cpf" maxlength="11" minlength="11" value="<?=$linha["cpf"]?>">
                <select name="cargo" id="">
                    <option value="" selected disabled>CARGO</option>
                    <option value="administrador">Administrador</option>
                    <option value="gerente">Gerente</option>
                    <option value="funcionario">Funcionario</option>
                    <option value="cliente">Cliente</option>
                </select>
                <select name="sexo">
                    <option value="" selected disabled>SEXO</option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="naobinario">Não Binário</option>
                    <option value="outro">Outro</option>
                </select>
                <input type="password" name="senha" maxlength="10" value="<?=$linha["senha"]?>">    
                <input type="hidden" name="imagem" value="<?=$linha["imagem"]?> ">
                <input type="hidden" name="idUsuario" value="<?=$linha["idUsuario"]?>">
                <button>Enviar</button>
            </form>
        </div>
    </section>
    
</body>
</html>