<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#modal").on({
                mouseover: function(){
                    $("#modalCarrinho").css("display", "block");
                },  
                mouseout: function(){
                    $("#modalCarrinho").css("display", "block");
                }
            });

            $("body").click(function(){
                $("#modalCarrinho").css("display", "none");
            });

            $("#flecha").click(function(){
                $("#modalCarrinho").css("display", "none");
            });
        });
    </script>
</head>
<body>
    <header>
        <div id="cabecalho">
            <a href="../../../views/index.php"><img class="logo" src="../../../public/imagens/logo.png" alt=""></a>
            <form class="forms" action="../../../views/funcionario/produto/buscaProduto.php" method="get">
                <input type="text" placeholder="Buscar produto" name="busca" class="pesquisar">
                <button class="botao-cabecalho"><img src="../../../public/imagens/lupa.png" class="lupa" alt=""></button>
            </form>

            <a class="link" id="modal" href="../../../views/carrinho/carrinho.php"><img class="icone" src="../../../public/imagens/carrinhos-de-compras.png" alt=""></a>
            <div id="modalCarrinho" class="popup-car">
                <div id="flecha"><img src="../../../public/imagens/fechar.png" alt=""></div>
                <h1>Carrinho</h1>
                <?php
                    if(isset($_SESSION["carrinho"])){
                        foreach($_SESSION["carrinho"] as $key => $value){
                            $nome = $value["nome"];
                            $nomeProduto = mb_strimwidth("$nome", 0, 20);
                            ?>
                                <div class="produtos-modal">
                                    <img class="" src="<?=$value["imagem"]?>" alt="">
                                    <h2><?=$nomeProduto?></h2>
                                    <h3>R$<?=$value["preco"]?></h3>
                                </div>
                                <div id="borda"></div>
                            <?php
                        }
                        ?>
                        <a href="../../../views/pedido/finalizar-pedido.php"><div class="finalizar">Finalizar Pedido</div></a>
                        <?php
                    } else {
                        ?>
                            <div class="nao-ha">
                                <h2>Não há produtos no carrinho</h2>
                                <a class="link-produtos" href="../../../views/funcionario/produto/buscaProduto.php?busca=' '">Ver Produtos</a>
                            </div>
                        <?php
                    }
                ?>
            </div>

            <?php

                if(isset($_SESSION["cargo"])){
                    if($_SESSION["cargo"] == "administrador"){
                        ?>
                            <a class="link" href="../../../views/admin/"><img class="icone" src="../../../public/imagens/ajuste-de-contraste.png" alt=""></a>
                        <?php
                    } else if($_SESSION["cargo"] == "gerente") {
                        ?>
                            <a class="link" href="../../../views/gerente/"><img class="icone" src="../../../public/imagens/ajuste-de-contraste.png" alt=""></a>
                        <?php
                    } else if($_SESSION["cargo"] == "funcionario"){
                        ?>
                            <a class="link" href="../../../views/funcionario/"><img class="icone" src="../../../public/imagens/ajuste-de-contraste.png" alt=""></a>
                        <?php
                    } 
                }
               
                if(isset($_SESSION["email"])) {
                    ?>
                    <div id="user">
                        <a class="link" href="../../../views/usuario/perfilUsuario.php"><img src="../<?=$_SESSION["imagem"]?>" alt="" class="imagem"></a>
                        <a class="link" href="../../../views/usuario/sairUsuario.php"><img class="sair" src="../../../public/imagens/logout.png" alt=""></a>                      
                    </div>
                    <?php
                } else {
                    ?>
                        <a class="link" href="../../../views/usuario/loginUsuario.php">Login / Cadastre-se</a>
                    <?php
                }
            ?>

            
        </div>
</header>
</body>
</html>
