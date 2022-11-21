<?php 
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once "../../conexao.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $con = conexao();
    $select = "SELECT * from usuario WHERE email='$email' and senha='$senha'";

    $resul = mysqli_query($con, $select);
    $linha = mysqli_fetch_assoc($resul);

    if(mysqli_num_rows($resul) < 1){
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        $_SESSION["erro"] = "Email ou senha inválida";
        header("location: loginUsuario.php");
    } else {
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        $_SESSION["nome"] = $linha["nome"];
        $_SESSION["cpf"] = $linha["cpf"];
        $_SESSION["telefone"] = $linha["telefone"];
        $_SESSION["endereco"] = $linha["endereco"];
        $_SESSION["imagem"] = $linha["imagem"];
        $_SESSION["sexo"] = $linha["sexo"];
        $_SESSION["cargo"] = $linha["cargo"];
        header("location: perfilUsuario.php");
    }
   
} else {
    $_SESSION["erro"] = "Email ou senha inválida";
    header("location: loginUsuario.php");
}

?>