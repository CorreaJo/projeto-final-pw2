<?php
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
    <?php require "../../components/cabecalho.php"?>
    <h1>Dashboard Administrador</h1>
    <section>
        <div id="empregados">
            <h2 class="todos">Todos os Funcionarios Cadastrados</h2>
            <a class="cadastro" href="empregados/cadastroEmpregado.php">Cadastrar Empregados</a>
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
                                            <p>Endereço: <?=$linhaEmpregados["endereco"]?></p>
                                            <p>Telefone: <?=$linhaEmpregados["telefone"]?></p>
                                        </div>
                                        <div>
                                        <a class="botao" href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaEmpregados["idUsuario"]?>">Deletar</a>
                                        <a class="botao" href="../../views/usuario/updateFormUsuario.php?idUsuario=<?=$linhaEmpregados["idUsuario"]?>">Atualizar</a>
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
                        <h2 class="naoHa">Não há fornecedores cadastrados</h2>
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
                                                <div>
                                                    <a class="botao" href="fornecedor/deletarFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Deletar</a>
                                                    <a class="botao" href="fornecedor/UpdateFormFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Atualizar</a>
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
                    <h2 class="naoHa">Não há usuarios cadastrados!</h2>
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
                                        <p>Endereço: <?=$linhaUsuario["endereco"]?></p>
                                        <p>Telefone: <?=$linhaUsuario["telefone"]?></p>
                                    </div>
                                    <div>
                                        <a class="botao" id="deletar" href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Deletar</a>
                                        <a class="botao" id="atualizar" href="../../views/usuario/updateFormUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Atualizar</a>
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
</body>
</html>