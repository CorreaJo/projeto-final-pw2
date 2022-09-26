<?php

function ListarTudoPedido(){
    $select = "SELECT * FROM pedido";
    return $select;
}

function ListarPedido(){
    $select = "SELECT * FROM pedido WHERE idPedido='$idPedido'";
    return $select;
}

function DeletePedido(){
    $delete = "DELETE FROM pedido WHERE idPedido='$idPedido'";
    return $delete;
}