<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Cad/css/estilo.css">
    <title>Eletrolucks</title>
</head>

<body>
<?php
    include('../php/conexao.php');
    $id = $_GET['ID'];
    $query = mysqli_query($sql,"SELECT * FROM itens WHERE ID='$id'");

    $resul = mysqli_fetch_array($query);
    
    ?>
    <header>
        <div id="sum">
            <h1 class="titulo"> Eletrolucks, a melhor loja de eletrônicos do Brasil!</h1>
            <li style="list-style: none;"><a href="../index.html">Inicial</a></li>
            <li style="list-style: none;">Cadastro - <a id="pag">Editor de Itens</a> - <a href="../Cad/clientes.html">Clientes</a></li>
            <li style="list-style: none;"><a href="../Bd/bd.php">Consulta</a></li>
        </div>
        <div id="itens">
            <h1>⠀Editor de Itens</h1>
            <form type="text" name="text" method="POST" action="../php/salvaralterit.php">
                <p> <label id="pergunta">ID:</label>
                    <input type="text" name="id" placeholder="Digite o ID do produto" value=<?php echo $resul['ID'];?> required></p>
                <p> <label id="pergunta">Modelo:</label>
                    <input type="text" name="modelo" placeholder="Digite o modelo" value=<?php echo $resul['modelo'];?> required></p>
                <p> <label id="pergunta">Marca:</label>
                    <input type="text" name="marca" placeholder="Digite a marca do produto" value=<?php echo $resul['marca'];?> required></p>
                <p> <label id="pergunta">Quantidade:</label>
                    <input type="text" name="quantidade" placeholder="Digite a quantidade" value=<?php echo $resul['quantidade'];?> required></p>
                <p> <label id="pergunta">Valor:</label>
                    <input type="text" name="valor" placeholder="Digite o valor do produto" value=<?php echo $resul['valor'];?> required></p>
                <button id="confirm" type="submit">Editar</button>
                <button id="reset" href="../Bd/bd.php">Voltar</button>
            </form>
        </div>
    </header>

</body>

</html>