<?php

include "conexao.php";
$id = $_POST["id"];
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];

    $sqlUpdate = ("UPDATE itens SET id='$id',modelo='$modelo',marca='$marca',quantidade='$quantidade',valor='$valor' WHERE id = '$id'");
	$result = $sql->query($sqlUpdate);
    header('Location: ../Bd/bd.php');
?>