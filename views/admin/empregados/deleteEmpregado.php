<?php

require "../../../conexao.php";
require "../../../models/empregados.php";

$idEmpregado = $_GET["idEmpregado"];

$con = conexao();
$delete = DeleteEmpregado($idEmpregado);

$query = mysqli_query($con, $delete);

if($query) {
   ?>
        <h2>Deletado com sucesso!</h2>
        <a href="../admin/">Ver Empregados</a>
   <?php
}
?>