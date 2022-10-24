<?php
require "../../components/cabecalho.php";

if($_SESSION["cargo"] == "funcionario"){
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Produto</title>
    </head>
    <body>
        <h1>Novo Produto</h1>

        <form action="insertProduto.php" method="POST" enctype="multipart/form-data">
            <input type="text"  name="nome" placeholder="Nome do Produto">
            <input type="text" name="cor" placeholder="Cor do Produto">
            <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do Produto"></textarea>
            <label for="imagem">Insira a imagem</label>
            <input type="file" name="imagem[]" multiple="multiple">
            <input type="text" name="categoria" placeholder="Nome da Categoria">
            <input type="text" name="preco" placeholder="Preço do Produto">
            <button>Enviar</button>
        </form>
    </body>
    </html>
    <?php
} else {
    header("location: ../../");
}
?>