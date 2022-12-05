<?php

include "conexao.php";
    $id = $_POST["id"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];

    $sql -> query("insert into itens(id, modelo, marca, quantidade, valor)value('$id','$modelo','$marca','$quantidade','$valor')");
	header('Location: ../Cad/itens.html');
?>