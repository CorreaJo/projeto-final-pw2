<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Cadastre-se</title>
</head>
<body>
    <div>
        <h1>Cadastre-se</h1>
        <form action="novoUsuario.php" method="POST">
            <input type="text"  name="nome" placeholder="Seu nome">
            <input type="text" name="endereco" placeholder="Seu endereço">
            <input type="tel"
            maxlength="11" name="telefone" placeholder="Seu telefone">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="cpf" placeholder="Seu cpf" maxlength="14" minlength="11">
            <select name="sexo">
                <option value="" selected disabled>SEXO</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
                <option value="naobinario">Não Binário</option>
                <option value="outro">Outro</option>
            </select>
            <input type="password" name="senha" maxlength="10" placeholder="Senha">
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>