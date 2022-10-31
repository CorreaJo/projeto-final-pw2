<?php

require "../../../components/cabecalho.php";

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$select = ListarProduto($idProduto);
$query = mysqli_query(conexao(), $select);

while ($linha = mysqli_fetch_assoc($query)){
    ?>
        <?php
            $inner = "SELECT caminho from produto po INNER JOIN imagens img ON po.idProduto = img.idProduto WHERE img.idProduto=".$linha["idProduto"];
            $innerResul = mysqli_query(conexao(), $inner);
            while($imagem = mysqli_fetch_assoc($innerResul)){
                ?>
                <img src="<?=$imagem["caminho"]?>" alt="">
                <?php
            }
        ?>
        <h1>Nome do Produto: <?=$linha["nome"]?></h1>
        <h3>Cor: <?=$linha["cor"]?></h3>
        <p><?=$linha["descricao"]?></p>
    <?php
}

?>