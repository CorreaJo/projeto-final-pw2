<?php
require "../../../conexao.php";
require "../../../models/produto.php";

$busca = $_GET["busca"];

$con = conexao();

$selectProduto = "SELECT * FROM produto WHERE nome like'%$busca%'";
$query = mysqli_query($con, $selectProduto);

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
    <?php require "../../../components/cabecalho.php"?>
    <div id="produtos">
            <h2 class="titulo">Encontramos alguns resultados:</h2>
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
</body>
</html>