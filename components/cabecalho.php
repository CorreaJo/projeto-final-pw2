<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
</head>
<body>
    <header>
        <div id="cabecalho">
            <a href="../../../views/index.php"><img class="logo" src="../../../public/imagens/logo.png" alt=""></a>
            <form action="../../../views/funcionario/produto/buscaProduto.php" method="get">
                <input type="text" placeholder="Buscar produto" name="busca" class="pesquisar">
                <button><img src="../../../public/imagens/lupa.png" class="lupa" alt=""></button>
            </form>

            <a class="link" href="../../../views/carrinho/carrinho.php"><img class="icone" src="../../../public/imagens/carrinhos-de-compras.png" alt=""></a>

            <?php
                session_start();
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
