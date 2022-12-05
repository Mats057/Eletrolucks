<?php

    if(!empty($_GET['ID']))
    {
        include('../php/conexao.php');

        $id = $_GET['ID'];

        $sqlSelect = "SELECT * FROM itens WHERE ID='$id'";

        $result = $sql->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM itens WHERE ID='$id'";
            $resultDelete = $sql->query($sqlDelete);
            header("Location: bd.php");
        }
        
    }
    