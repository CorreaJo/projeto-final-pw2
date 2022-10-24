<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Cadastre-se</title>
    <link rel="stylesheet" href="../../public/css/cadrastro.css">
    <script type="text/javascript" src="../../../public/js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../public/js/jquery.maskedinput.min.js"/></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("999.999.999-99");
        });
        $(document).ready(function(){
            $("#telefone").mask("(99)99999-9999");
        });

    </script>
</head>
<body>
    <div class="cadastro">
        <h1>Cadastre-se</h1>
        <form action="novoUsuario.php" method="POST" enctype="multipart/form-data">
            <input type="text"  name="nome" placeholder="Nome"><br>
            <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="25" minlength="11"><br>
            <input type="text" name="telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15" /><br>
            <input type="text" name="endereco" placeholder="Endereço"><br>
            <select name="sexo">
                <option value="" selected disabled>SEXO</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
                <option value="naobinario">Não Binário</option>
                <option value="outro">Outro</option>
            </select><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="senha" maxlength="10" placeholder="Senha"><br>
            <input type="file" name="imagem"><br>
            <input type="hidden" name="cargo" value="cliente">
            <button>Cadastrar</button>
        </form>
    </div>
</body>
</html>