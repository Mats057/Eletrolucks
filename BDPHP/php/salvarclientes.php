<?php

include "conexao.php";
    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $cpf  = $_POST["cpf"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nasc = $_POST["nasc"];

    $sql -> query("insert into clientes(nome, telefone, cpf, cep, email, senha, nasc)value('$nome','$tel','$cpf','$cep','$email','$senha','$nasc')");
	header('Location: ../Cad/clientes.html');
?>