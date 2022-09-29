<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Cadastre-se</title>
</head>
<body>
    <h1>Cadastre-se</h1>

    <form action="novoUsuario.php" method="GET">
        <input type="text"  name="nome" placeholder="Seu nome">
        <input type="text" name="endereco">
        <input type="tel" 
        maxlength="11" name="telefone" placeholder="Seu telefone">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="cpf" placeholder="Seu cpf" maxlength="11" minlength="11">
        <input type="text" name="sexo">
        <input type="password" name="senha" maxlength="10">
        <button>Enviar</button>
    </form>
</body>
</html>