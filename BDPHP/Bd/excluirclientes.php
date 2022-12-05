<?php

    if(!empty($_GET['cpf']))
    {
        include('../php/conexao.php');

        $id = $_GET['cpf'];

        $sqlSelect = "SELECT * FROM clientes WHERE cpf='$id'";

        $result = $sql->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM clientes WHERE cpf='$id'";
            $resultDelete = $sql->query($sqlDelete);
            header("Location: bd.php");
        }
        
    }
    
   