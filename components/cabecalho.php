<header>
        <div id="cabecalho">
            <a href="../../../views/index.php"><img src="../../../public/imagens/logo.png" alt=""></a>
            <form action="../../../views/funcionario/produto/produto.php" method="get">
                <input type="search" placeholder="Buscar produto" name="busca">
                <button>Pesquisar</button>
            </form>
            <p>carrinho</p>
            <a href="../../../views/admin/usuarios/todosUsuarios.php">Ver usuarios</a>
            <a href="../../../views/funcionario/produto/produto.php">Ver Produtos</a>

            <?php

                session_start();

                if(isset($_SESSION["email"])) {
                    ?>
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