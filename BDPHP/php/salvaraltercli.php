<?php

include "conexao.php";
    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $cpf  = $_POST["cpf"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nasc = $_POST["nasc"];

    $sqlUpdate = ("UPDATE itens SET nome='$nome',telefone='$tel',cpf='$cpf',cep='$cep',email='$email',senha='$senha',nasc='$nasc' WHERE cpf = '$cpf'");
	$result = $sql->query($sqlUpdate);
    header('Location: ../Bd/bd.php');
?>