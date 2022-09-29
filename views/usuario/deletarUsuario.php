<?php

require "../../conexao.php";
require "../../models/usuario.php";

$idUsuario = $_GET["idUsuario"];

$con = conexao();
$delete = DeleteUsuario($idUsuario);

$query = mysqli_query($con, $delete);

if($query) {
   ?>
        <h2>Deletado com sucesso!</h2>
        <a href="../admin/usuarios/todosUsuarios.php">Ver usuarios</a>
   <?php
}
?>