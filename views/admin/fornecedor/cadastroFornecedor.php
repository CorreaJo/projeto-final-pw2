<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    <script type="text/javascript" src="../../../public/js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../public/js/jquery.maskedinput.min.js"/></script>
    <script src="../../../public/js/mask.js"></script>
    <link rel="stylesheet" href="../../../public/css/forms.css">
</head>
<body>
    <section>
        <div class="cadastro">
            <h1>Cadastro de Fornecedor</h1>
            <form action="novoFornecedor.php" method="post">
                <input type="text" name="nome" placeholder="Nome do Fornecedor">
                <input type="text" name="cnpj" placeholder="CNPJ do Fornecedor">
                <button>Cadastrar</button>
            </form>
        </div>
    </section>
</body>
</html>