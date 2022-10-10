<?php 
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    include_once "../../conexao.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $con = conexao();
    $select = "SELECT * from usuario WHERE email='$email' and senha='$senha'";

    $resul = mysqli_query($con, $select);

    if(mysqli_num_rows($resul) < 1){
        
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("location: loginUsuario.php");
    } else {
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        header("location: perfilUsuario.php");
    }
   
} else {
    header("location: loginUsuario.php");
}

?>