<?php

include("../php/conexao.php");

$coni = mysqli_query($sql, "select * from itens") or die($sql->error);
$conc = mysqli_query($sql, "select * from clientes") or die($sql->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Eletrolucks</title>
</head>

<body>
    <header>
        <div id="sum">
            <h1 class="titulo"> Eletrolucks, a melhor loja de eletrônicos do Brasil!</h1>
            <li style="list-style: none;"><a href="../index.html">Inicial</a></li>
            <li style="list-style: none;">Cadastro - <a href="../Cad/itens.html">Itens</a> - <a href="../Cad/clientes.html">Clientes</a></li>
            <li style="list-style: none;"><a id="pag">Consulta</a></li>
        </div>
    </header>

    <table id="Itens">
        <h2 id="tabelaTit">Itens</h2><br>
        <tr id="tit">
            <th>ID</th>
            <th>Modelo</th>
            <th>Marca</th> 
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Opções</th>
        </tr>
        <?php while($dado = mysqli_fetch_array($coni)){
        echo "<tr>";
            echo "<td>".$dado["ID"]."</td>";
            echo "<td>".$dado["modelo"]."</td>";
            echo "<td>".$dado["marca"]."</td>";
            echo "<td>".$dado["quantidade"]."</td>";
            echo "<td>".$dado["valor"]."</td>";
            echo "<td><a style='text-decoration:none; color:#AC0300;' href='excluiritens.php?ID=$dado[ID]'>Excluir</a>  |  ";
            echo "<a style='text-decoration:none; color:#266DD3;' href='editaritens.php?ID=$dado[ID]'>Editar</a></td>";
        echo "</tr>";
        } ?>
    </table>


    <table id="Clientes">
        <h2 id="tabelaTit">Clientes</h2><br>
        <tr id="tit">
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>CEP</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Nascimento</th>
            <th>Opções</th>
            
        </tr>
        <?php while($dado = mysqli_fetch_array($conc)){
        echo "<tr>";
            echo "<td>".$dado["nome"]."</td>";
            echo "<td>".$dado["telefone"]."</td>";
            echo "<td>".$dado["cpf"]."</td>";
            echo "<td>".$dado["cep"]."</td>";
            echo "<td>".$dado["email"]."</td>";
            echo "<td>".$dado["senha"]."</td>";
            echo "<td>". date("d/m/Y", strtotime($dado["nasc"]))."</td>";
            echo "<td><a style='text-decoration:none; color:#AC0300;' href='excluirclientes.php?cpf=$dado[cpf]'>Excluir</a>  |  ";
            echo "<a style='text-decoration:none; color:#266DD3;' href='editarclientes.php?cpf=$dado[cpf]'>Editar</a></td>";
        echo "</tr>";
         } ?>

    </table>

</body>

</html>