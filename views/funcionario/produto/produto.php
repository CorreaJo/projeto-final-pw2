<?php

require "../../../components/cabecalho.php";

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$select = ListarProduto($idProduto);
$query = mysqli_query(conexao(), $select);

$linha = mysqli_fetch_assoc($query)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$linha["nome"]?></title>
    <link rel="stylesheet" href="../../../public/css/produto.css">
    <script src="../../../public/js/jquery-3.6.1.min.js"></script>
    <script>
        $('.head').click(function(){
            $(this).toggleClass('active');
            $(this).parent().find('.arrow').toggleClass('arrow-animate');
            $(this).parent().find('.content').slideToggle(280);
        });
</script>
</head>
<body>
    <section>
        <div>
            <img class="imagem-produto" src="<?=$linha["imagem"]?>" alt="Imagem Principal do <?=$linha["nome"]?>">
            <?php
                $inner = "SELECT caminho from produto po INNER JOIN imagens img ON po.idProduto = img.idProduto WHERE img.idProduto=".$linha["idProduto"];
                $innerResul = mysqli_query(conexao(), $inner);
                while($imagem = mysqli_fetch_assoc($innerResul)){
                    ?>
                    <img class="imagens-produto" src="<?=$imagem["caminho"]?>" alt="">
                    <?php
                }
            ?>
        </div>
        <div>
            <h1><?=$linha["nome"]?></h1>
            <h3><?=$linha["cor"]?></h3>
            <p ><?=$linha["descricao"]?></p>
            <form action="../../carrinho/processamentoCarrinho.php?idProduto=<?=$linha["idProduto"]?>" method="POST">
                <select name="qtd" id="">
                    <option value="" selected disabled>Selecione a Quantidade</option>
                    <?php
                        for($i=1; $i <= $linha["estoque"]; $i++){
                            $estoque += 1;
                            ?>
                                <option value="<?=$estoque?>"><?=$estoque?></option>
                            <?php
                        }
                    ?>
                </select>
                <select name="tamanho" id="">
                    <option value="" selected disabled>Selecione o Tamanho</option>
                    <?php
                        for($i=36; $i <= 42; $i++){
                            ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <?php
                        }
                    ?>
                </select>
                <input type="hidden" name="acao" value="adicionar">
                <input type="hidden" name="imagem" value="<?=$linha["imagem"]?>">
                <input type="hidden" name="nome" value="<?=$linha["nome"]?>">
                <input type="hidden" name="cor" value="<?=$linha["cor"]?>">
                <input type="hidden" name="categoria" value="<?=$linha["categoria"]?>">
                <input type="hidden" name="preco" value="<?=$linha["preco"]?>">
                <?php
                    if(isset($_SESSION["email"])){
                        ?>
                            <button>Comprar</button>
                        <?php
                    } else {
                        ?>
                            <div class="erro">
                                <h2>Se cadastre ou faça login para colocar o produto no carrinho</h2>
                                <a href="../../usuario/loginUsuario.php">Login/Cadastre-se</a>
                            </div>
                        <?php
                    }
                ?>
                
            </form>
        </div>
    </section>
    <?php require "../../../components/rodape.php"?>
</body>
</html>