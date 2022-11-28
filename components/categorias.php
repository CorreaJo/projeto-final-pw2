<style>
    nav {
        background-color: #597c91;
        padding: 20px;
        display: flex;
        justify-content: space-around;
    }

    nav a {
        text-decoration: none;
        color: white;
        font-size: 35px;
    }
</style>

<div>
    <nav>
        <?php
            while($categoria = mysqli_fetch_assoc($queryCategoria)){
                $nomeCategoria = $categoria["nomeCategoria"];
                ?>
                    <a href="funcionario/produto/buscaProduto.php?busca=<?=$categoria["nomeCategoria"]?>"><?=$categoria["nomeCategoria"]?></a>
                <?php
            }
        ?>
    </nav>
</div>