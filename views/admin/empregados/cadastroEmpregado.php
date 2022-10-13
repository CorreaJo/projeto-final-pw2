<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empregado</title>
</head>
<body>
    <h1>Cadastrar Empregado</h1>
    <form action="novoEmpregado.php" method="post">
        <input type="text" name="nome" placeholder="Nome do Empregado">
        <input type="text" name="endereco" placeholder="Endereço do Empregado">
        <input type="text" name="cpf" placeholder="CPF do Empregado">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone do Empregado" maxlength="11">
        <input type="email" name="email" placeholder="Email do Empregado">
        <input type="file" name="imagem" placeholder="Foto do Empregado">
        <input type="password" name="senha" placeholder="Senha do Empregado">
        <select name="cargo">
            <option value="" selected disabled>CARGO DO EMPREGADO</option>
            <option value="administrador">Administrador</option>
            <option value="gerente">Gerente</option>
            <option value="funcionario">Funcionario</option>
        </select>
        <button>Cadastrar</button>
    </form>
</body>
</html>