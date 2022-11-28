<?php
session_start();

if($_SESSION["cargo"] == "gerente"){
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nova Categoria</title>
        <link rel="stylesheet" href="../../../public/css/forms.css">
    </head>
    <body>
        <section>
            <div class="cadastro">
                <h1>Nova Categoria</h1>
                <form action="novaCategoria.php" method="post">
                    <input type="text" name="nomeCategoria" placeholder="Nome da Categoria">
                    <button>Cadastrar</button>
                </form>
            </div>
        </section>
    </body>
    </html>

    <?php
} else {
    header("location: ../../");
}
?>