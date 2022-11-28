<?php

require "../../components/cabecalho.php";

if($_SESSION["cargo"] == "gerente"){
    require "../../conexao.php";
    require "../../models/categoria.php";
    require "../../models/fornecedor.php";

    // crud cargo = funcionario ou mais
    $selectEmpregados = "SELECT * from usuario where NOT cargo='cliente'";
    $resulEmpregados = mysqli_query(conexao(), $selectEmpregados);
    
    $resul = mysqli_query(conexao(), ListarTudoCategoria());
    
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/css/adm.css">
        <title>Categorias</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION["certo"])){
                require "../../components/acerto.php";
                unset($_SESSION["certo"]);
            }
        ?>
        <div id="categorias">
            <h2 class="todos">Categorias</h2>
            <a class="cadastro" href="categoria/cadastroCategoria.php">Nova Categoria</a>
            <?php
                if(mysqli_num_rows($resul) <= 0){
                    ?>
                        <h2 class="naoHa">Não há categoria cadastrada</h2>
                    <?php
                } else {
                    ?>
                    <div class="funcionarios">
                        <?php
                            while($linha = mysqli_fetch_assoc($resul)){
                                ?>
                                    <div class="caixa">
                                        <div class="categoria">
                                            <div>
                                                <h2 class="nome"><?=$linha["nomeCategoria"]?></h2>
                                            </div>
                                            <div class="botoes">
                                                <div class="botao"><a href="categoria/deletarCategoria.php">Deletar</a></div>
                                                <div class="atualizar"><a href="categoria/UpdateFormCategoria.php">Atualizar</a></div>
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
        <div id="empregados">
                <h2 class="todos">Todos os Funcionarios Cadastrados</h2>
                <a class="cadastro" href="../usuario/cadastroUsuario.php">Cadastrar Empregados</a>
                <?php
                    if(mysqli_num_rows($resulEmpregados) <= 0){
                        ?>
                            <h2 class="naoHa">Não há empregados cadastrados</h2>
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
                                                <div class="botao">
                                                    <a href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaEmpregados["idUsuario"]?>">Deletar</a>
                                                </div>
                                            
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
            <?php require "../../components/rodape.php"?>
    </body>
    </html>
    <?php
} else {
    header("location: ../");
}

?>