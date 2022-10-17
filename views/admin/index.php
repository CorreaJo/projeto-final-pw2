<?php
require "../../conexao.php";
require "../../models/fornecedor.php";
require "../../models/empregados.php";
require "../../models/usuario.php";

$con = conexao();
// crud usuarios
$selectUsuario = ListarTudoUsuario();
$resulUsuario = mysqli_query($con, $selectUsuario);
// crud fornecedor
$selectForne = ListarTudoFornecedor();
$resulForne = mysqli_query($con, $selectForne);
// crud empregados
$selectEmpregados = ListarTudoEmpregado();
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
            <h2>Todos os Funcionarios Cadastrados</h2>
            <a href="empregados/cadastroEmpregado.php">Cadastrar Empregados</a>
            <?php
                if(mysqli_num_rows($resulEmpregados) <= 0){
                    ?>
                        <h3>Não há empregados cadastrados</h3>
                    <?php
                } else {
                    ?>
                    <div id="funcionarios">
                        <?php
                            while($linhaEmpregados = mysqli_fetch_assoc($resulEmpregados)){
                                ?>
                                <div class="caixa">
                                    <div id="empregado">
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
                                            <a class="botao" href="empregados/deleteEmpregado.php?idEmpregado=<?=$linhaEmpregados["idEmpregado"]?>">Deletar</a>

                                        <a class="botao" href="empregados/UpdateFormEmpregado.php?idEmpregado=<?=$linhaEmpregados["idEmpregado"]?>">Atualizar</a>
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
        <div id="Fornecedores">
            <h2>Todos os Fornecedores Cadastrados</h2>
            <a href="fornecedor/cadastroFornecedor.php">Cadastrar Fornecedor</a>
            <?php
                if(mysqli_num_rows($resulForne) <= 0){
                    ?>
                        <h3>Não há fornecedores cadastrados</h3>
                    <?php 
                } else {
                    ?>
                    <div>
                        <?php
                        while($linhaForne = mysqli_fetch_assoc($resulForne)){
                            ?>
                            <div class="caixa">
                                <div class="info">
                                    <h2 class="nome"><?=$linhaForne["nomeFornecedor"]?></h2>
                                <div>
                                <div class="acoes">
                                    <p>CNPJ: <?=$linhaForne["CNPJ"]?></p>
                                    <a class="botao" href="fornecedor/deletarFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Deletar</a>
                                    <a class="botao" href="fornecedor/UpdateFormFornecedor.php?idFornecedor=<?=$linhaForne["idFornecedor"]?>">Atualizar</a>
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
            <h2>Todos os Usuarios Cadastrados</h2>
            <a href="../usuario/cadastroUsuario.php">Cadastrar Usuario</a>
            <div class="caixa">
                    <?php
                        while($linhaUsuario = mysqli_fetch_assoc($resulUsuario)){
                            ?>
                            <div id="empregado">
                                <img src="../<?=$linhaUsuario["imagem"]?>" alt="">
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
                                <a class="botao" href="../../views/usuario/deletarUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Deletar</a>
                                <a class="botao" href="../../views/usuario/updateFormUsuario.php?idUsuario=<?=$linhaUsuario["idUsuario"]?>">Atualizar</a>
                            </div>

                            <?php
                        }
                    ?>
        </div>
    </section>
</body>
</html>