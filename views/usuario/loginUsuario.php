<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/forms.css">
</head>
<body>
    <section>
        <div class="cadastro login">
            <h1>Login</h1>
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
            <form action="testeUsuario.php" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" name="submit" class="submit"><br>
                <div class="cadastre-se">
                    <p>Não possui cadastro?</p>
                    <a href="cadastroUsuario.php">Cadastre-se</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>