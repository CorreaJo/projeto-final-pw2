<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$con = conexao();
$select = ListarProduto($idProduto);

$resul = mysqli_query($con, $select);
$linha = mysqli_fetch_assoc($resul)
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar Produto</h1>
    <form action="atualizarProduto.php" method="POST">
        <input type="text"  name="nome" placeholder="Nome do Produto" value="<?=$linha["nome"]?>">
        <input type="text" name="cor" placeholder="Cor do Produto" value="<?=$linha["cor"]?>">
        <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do Produto"><?=$linha["descricao"]?></textarea>
        <label for="imagem">Insira a imagem</label>
        <input type="file" name="imagem" value="<?=$linha["imagem"]?>">
        <input type="text" name="categoria" placeholder="Nome da Categoria" value="<?=$linha["categoria"]?>">
        <input type="text" name="preco" placeholder="Preço do Produto" value="<?=$linha["preco"]?>">
        <input type="hidden" name="idProduto" value="<?= $linha["idProduto"]?>">
        <button>Enviar</button>
    </form>
</body>
</html>