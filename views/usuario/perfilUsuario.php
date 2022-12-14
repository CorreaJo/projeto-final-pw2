<?php
require "../../components/cabecalho.php";

$logado = $_SESSION["email"];

require "../../conexao.php";
require "../../models/usuario.php";

$con = conexao();
$select = "SELECT * from usuario WHERE email='$logado'";

$resul = mysqli_query($con, $select);

$linha = mysqli_fetch_assoc($resul);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/cabecalho.css">
    <link rel="stylesheet" href="../../public/css/perfil.css">
    <title><?=ucfirst($linha["nome"])?></title>
</head>
<body>
    <main>
        <h1 id="ola">Olá <strong><?=ucfirst($linha["nome"])?></strong></h1>
        <div class="cartao">
            <div id="usuario">
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
                                        $(".certo").animate({
                                            height: 'toggle'
                                        });
                                    }, 3000);
                                });
                            </script>
                        <?php
                        unset($_SESSION["erro"]);
                    }
                ?>
                <img id="img" src="<?=$linha["imagem"]?>" alt="<?=$linha["nome"]?>">
                <div class="info">
                    <p class="label">Nome:</p>
                    <h2 class="nome"><?=ucfirst($linha["nome"])?></h2>
                    <p class="label">Endereço:</p>
                    <h2 class="nome"><?=$linha["endereco"]?></h2>
                    <p class="label">Email:</p>
                    <h2 class="nome"><?=$linha["email"]?></h2>
                </div>
            </div>
            <div class="atualizarSenha">
                <a href="formSenhaUsuario.php?idUsuario=<?=$linha["idUsuario"]?>">Atualizar Senha</a>
            </div>
        </div>
    </main>
    <?php require "../../components/rodape.php"?>
</body>
</html>