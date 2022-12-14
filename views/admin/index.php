<?php

require "../../components/cabecalho.php";

if($_SESSION["cargo"] == "administrador"){
    require "../../conexao.php";
    require "../../models/fornecedor.php";
    require "../../models/usuario.php";

    $con = conexao();
    // crud usuarios
    $selectUsuario = "SELECT * FROM usuario WHERE cargo='cliente'";
    $resulUsuario = mysqli_query($con, $selectUsuario);
    // crud fornecedor
    $selectForne = ListarTudoFornecedor();
    $resulForne = mysqli_query($con, $selectForne);
    // crud cargo = funcionario ou mais
    $selectEmpregados = "SELECT * from usuario where NOT cargo='cliente'";
    $resulEmpregados = mysqli_query($con, $selectEmpregados);

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <link rel="stylesheet" href="../../public/css/adm.css">
    </head>
    <body>
        <h1 class="titulo">Dashboard Administrador</h1>
        <section>
            <div id="empregados">
            <?php
                if(isset($_SESSION["certo"])){
                    require "../../components/acerto.php";
                    ?>
                        <script>
                            $(document).ready(function() {
                                setTimeout(function(){ 
                                    $(".certo").animate({
                                        height: 'toggle'
                                    });
                                }, 3000);
                            });
                        </script>
                    <?php
                    unset($_SESSION["certo"]);
                } 
                
                if(isset($_SESSION["erro"])){
                    require "../../components/erro.php";
                    ?>
                        <script>
                            $(document).ready(function() {
                                setTimeout(function(){ 
                                    $(".erro").animate({
                                        height: 'toggle'
                                    });
                                }, 3000);
                            });
                        </script>
                    <?php
                    unset($_SESSION["erro"]);
                }
            ?> 
                <h2 class="todos">Todos os Funcionarios Cadastrados</h2>
                <a class="cadastro" href="../usuario/cadastroUsuario.php">Cadastrar Empregados</a>
                <?php
                    if(mysqli_num_rows($resulEmpregados) <= 0){
                        ?>
                            <h2 class="naoHa">N??o h?? empregados cadastrados</h2>
                        <?php
                    } else {
                        ?>
                        <div class="funcionarios">
                            <?php
                                while($linhaEmpregados = mysqli_fetch_assoc($resulEmpregados)){
                                    ?>
                                    <div class="caixa">
                                        <div class="empregado">
                                            <img src="<?=$linhaEmpregados["imagem"]?>" alt="">
                                            <div class="info">
                                                <h2 class="nome"><?=$linhaEmpregados["nome"]?></h2>
                                                <p>Cargo: <?=$linhaEmpregados["cargo"]?></p>
                                                <p>Email: <?=$linhaEmpregados["email"]?></p>
                                            </div>
                                        </div>
                                        <div class="acoes">
                                            <div>
                                                <p>CPF: <?=$linhaEmpregados["cpf"]?></p>       
                                                <p>Telefone: <?=$linhaEmpregados["telefone"]?></p>
                                            </div>
                                            <div class="botoes">
                                                <div class="botao"><a href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaEmpregados["idUsuario"]?>">Deletar</a></div>
                                                <div class="atualizar">
                                                    <a href="../../views/usuario/updateFormUsuario.php?idUsuario=<?=$linhaEmpregados["idUsuario"]?>">Atualizar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <div id="fornecedores">
                <h2 class="todos">Todos os Fornecedores Cadastrados</h2>
                <a class="cadastro" href="fornecedor/cadastroFornecedor.php">Cadastrar Fornecedor</a>
                <?php
                    if(mysqli_num_rows($resulForne) <= 0){
                        ?>
                            <h2 class="naoHa">N??o h?? fornecedores cadastrados</h2>
                        <?php 
                    } else {
                        ?>
                            <div class="forne">
                                <?php
                                    while($linhaForne = mysqli_fetch_assoc($resulForne)){
                                        ?>
                                            <div class="caixa">
                                                <h2 class="nome"><?=$linhaForne["nomeFornecedor"]?></h2>
                                                <div class="acoes">
                                                    <p>CNPJ: <?=$linhaForne["CNPJ"]?></p>
                                                    <div class="botoes">
                                                        <div class="botao">
                                                            <a href="fornecedor/deletarFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Deletar</a>
                                                        </div>
                                                        <div class="atualizar">
                                                            <a  href="fornecedor/UpdateFormFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Atualizar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div id="usuarios">
                <h2 class="todos">Todos os Usuarios Cadastrados</h2>
                <a class="cadastro" href="../usuario/cadastroUsuario.php">Cadastrar Usuario</a>
                <?php
                if(mysqli_num_rows($resulUsuario) <= 0){
                    ?>
                        <h2 class="naoHa">N??o h?? usuarios cadastrados!</h2>
                    <?php
                } else {
                    ?>
                    <div class="funcionarios">
                        <?php
                            while($linhaUsuario = mysqli_fetch_assoc($resulUsuario)){
                                ?>
                                <div class="caixa">
                                    <div class="empregado">
                                        <img src="<?=$linhaUsuario["imagem"]?>" alt="">
                                        <div class="info"> 
                                            <h2 class="nome"><?=$linhaUsuario["nome"]?></h2>
                                            <p>Email: <?=$linhaUsuario["email"]?></p>
                                        </div>
                                    </div>
                                    <div class="acoes">
                                        <div>
                                            <p>CPF: <?=$linhaUsuario["cpf"]?></p>       
                                            <p>Telefone: <?=$linhaUsuario["telefone"]?></p>
                                        </div>
                                        <div class="botoes">
                                            <div class="botao">
                                                <a href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Deletar</a>
                                            </div>
                                            <div class="atualizar">
                                                <a href="../../views/usuario/updateFormUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Atualizar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <?php require "../../components/rodape.php"?>
    </body>
    </html>
    <?php
} else {
    header("location: ../");
}
?>