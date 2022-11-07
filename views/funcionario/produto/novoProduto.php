<?php
require "../../../components/cabecalho.php";
require "../../../conexao.php";

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
            <select name="cor" id="">
                <option value="" selected disabled>Selecionar a Cor</option>
                <option value="azul">Azul</option>
                <option value="azul">Verde</option>
                <option value="azul">Vermelho</option>
                <option value="azul">Preto</option>
                <option value="azul">Branco</option>
                <option value="azul">Amarelo</option>
            </select>
            <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do Produto"></textarea>
            <label for="principal">Insira a imagem principal</label>
            <input type="file" name="principal">
            <label for="imagem">Insira as imagens secundárias</label>
            <input type="file" name="imagem[]" multiple="multiple">
            <select name="categoria" id="">
                <option value="" selected disabled>Selecionar Categoria</option>
                <?php
                    $select = "SELECT * FROM categoria";
                    $query = mysqli_query(conexao(), $select);

                    while($linha = mysqli_fetch_assoc($query)){
                        ?>
                            <option value="<?=$linha["nomeCategoria"]?>"><?=$linha["nomeCategoria"]?></option>
                        <?php
                    }
                ?>
            </select>
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