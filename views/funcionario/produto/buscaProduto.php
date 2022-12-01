<?php
require "../../../conexao.php";
require "../../../models/produto.php";
require "../../../models/categoria.php";

$queryCategoria = mysqli_query(conexao(), ListarTudoCategoria());

require "../../../components/cabecalho.php";


$busca = $_GET["busca"];
while($categoria = mysqli_fetch_assoc($queryCategoria)){
    if($busca == $categoria){
        $selectProduto = "SELECT * FROM produto WHERE categoria like'%$busca%'";
    } else {
        $selectProduto = "SELECT * FROM produto WHERE nome like'%$busca%'";
    }
}

$query = mysqli_query(conexao(), $selectProduto);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Produtos</title>
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
    <link rel="stylesheet" href="../../../public/css/buscaProduto.css">
</head>
<body>
    <div id="produtos">
            <?php
                if($query->num_rows > 0){
                    ?>
                        <h2 class="titulo">Encontramos alguns resultados:</h2>
                    <?php
                } else {
                    ?>
                        <h2 class="titulo">Não foi encontrado nenhum resultado</h2>
                    <?php
                }
            ?>
            
            <div class="produtos">
                <?php
                    while($produto = mysqli_fetch_assoc($query)){
                        $preco = number_format($produto["preco"], 2, ',', '.');
                        ?>
                            <div class="produto">
                                <img src="<?=$produto["imagem"]?>" alt="">
                                <div>
                                    <h2><?=$produto["nome"]?></h2>
                                    <h3>R$<?=$preco?></h3>
                                    <a href="produto.php?idProduto=<?=$produto["idProduto"]?>">Ver Produto </a>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <?php require "../../../components/rodape.php"?>
</body>
</html>