<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeçalho</title>
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
</head>
<body>
    <header>
        <div id="cabecalho">
            <a href="../../../views/index.php"><img src="../../../public/imagens/logo.png" alt=""></a>
            <form action="../../../views/funcionario/produto/produto.php" method="get">
                <input type="search" placeholder="Buscar produto" name="busca">
                <button>Pesquisar</button>
            </form>
            <p>carrinho</p>

            <?php
                session_start();
                if(isset($_SESSION["cargo"])){
                    if($_SESSION["cargo"] == "administrador"){
                        ?>
                            <a href="../../../views/admin/">Dashboard</a>
                        <?php
                    } else if($_SESSION["cargo"] == "gerente") {
                        ?>
                            <a href="../../../views/gerente/">Dashboard</a>
                        <?php
                    } else if($_SESSION["cargo"] == "funcionario"){
                        ?>
                            <a href="../../../views/funcionario/">Dashboard</a>
                        <?php
                    } else if($_SESSION["cargo"] == "cliente"){
                        ?>
                            <a href="../../../views/funcionario/produto/produto.php">Ver Produtos</a>
                        <?php
                    }
                }
               
                if(isset($_SESSION["email"])) {
                    ?>
                        <img src="<?=$_SESSION["imagem"]?>" alt="">
                        <a href="../../../views/usuario/perfilUsuario.php"><?=$_SESSION["nome"]?></a>
                    <?php
                } else {
                    ?>
                        <a href="../../../views/usuario/loginUsuario.php">Login / Cadastre-se</a>
                    <?php
                }
            ?>

            
        </div>
        <div>
            <nav>
                <a href="#">Categoria</a>
            </nav>
        </div>
</header>
</body>
</html>
