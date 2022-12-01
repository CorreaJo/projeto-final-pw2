<?php

require "../conexao.php";
require "../models/produto.php";
require "../models/categoria.php";

$select = "SELECT * FROM produto WHERE idProduto <= 12";
$query = mysqli_query(conexao(), $select);

$queryCategoria = mysqli_query(conexao(), ListarTudoCategoria());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/cabecalho.css">
    <link rel="shortcut icon" href="../public/imagens/logo.png" type="image/x-icon">
    <script type="text/javascript">
        function slide1(){
        document.getElementById('imagem').src="../public/imagens/forum-adidas.webp";
        setTimeout("slide2()", 3000)
        document.getElementById('link').href="link1.html"
        }

        function slide2(){
        document.getElementById('imagem').src="../public/imagens/forum-adidas2.webp";
        setTimeout("slide3()", 3000)
        document.getElementById('link').href="link2.html"
        }

        function slide3(){
        document.getElementById('imagem').src="../public/imagens/forum-adidas3.webp";
        setTimeout("slide1()", 3000)
        document.getElementById('link').href="link3.html"
        }
    </script>

</head>
<body onLoad="slide1()">
    <?php require "../components/cabecalho.php"?>
    <?php require "../components/categorias.php"?>
    <main class="main">
        <div id="banner">
            <h2>Lançamentos</h2>
            <div class="carrossel">
                <a id="link"><img id="imagem"></a>
            </div>
        </div>
        <div id="produtos">
            <h2>Veja Alguns dos nossos Produtos</h2>
            <div class="produtos">
                <?php
                    while($produto = mysqli_fetch_assoc($query)){
                        $preco = number_format($produto["preco"], 2, ',', '.');
                        ?>
                            <div class="produto">
                                <img src="<?=$produto["imagem"]?>" alt="Imagem Produto">
                                <div>
                                    <h2><?=$produto["nome"]?></h2>
                                    <h3>R$<?=$preco?></h3>
                                    <a href="funcionario/produto/produto.php?idProduto=<?=$produto["idProduto"]?>">Ver Produto</a>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div id="seja-membro">
            <h2>Faça parte do nosso cartão fidelidade</h2>
            <div class="chamada">
                    <img src="../public/imagens/tenis2.jpg" alt="">
                    <div>
                        <h4>Com o nosso cartão fidelidade você pode ganhar muitos benefícios, como:</h4>
                        <ul>
                            <li>Desconto nos produtos</li>
                            <li>Cashback</li>
                            <li>Acumulo de pontos</li>
                        </ul>
                        <h3>Venha Fazer Parte!</h3>
                    </div>
            </div>
        </div>
    </main>
    <?php require "../components/rodape.php"?>    
</body>
</html>