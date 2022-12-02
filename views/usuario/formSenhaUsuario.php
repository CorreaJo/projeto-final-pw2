<?php
session_start();
$idUsuario = $_GET["idUsuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Senha</title>
    <link rel="stylesheet" href="../../public/css/forms.css">
</head>
<body>
    <section>
        <div class="cadastro">
            <?php
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
            <form action="atualizarSenhaUsuario.php" method="POST">
                <input required type="password" name="senha" id="senha" placeholder="Senha">
                <input required type="password" name="senhaC" id="senhaC" placeholder="Confirmar Senha">
                <input type="hidden" value="<?=$idUsuario?>" name="idUsuario">
                <button>Atualizar</button>
            </form>
        </div>
    </section>
</body>
</html>