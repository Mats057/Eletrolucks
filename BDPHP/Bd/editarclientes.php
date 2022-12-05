<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Cad/css/estilo.css">
    <title>Eletrolucks</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include('../php/conexao.php');
    $id = $_GET['cpf'];
    $query = mysqli_query($sql,"SELECT * FROM clientes WHERE cpf='$id'");

    $resul = mysqli_fetch_array($query);
    
    ?>
    <header>
        <div id="sum">
            <h1 class="titulo"> Eletrolucks, a melhor loja de eletrônicos do Brasil!</h1>
            <li style="list-style: none;"><a href="../index.html">Inicial</a></li>
            <li style="list-style: none;">Cadastro - <a href="../Cad/itens.html">Itens</a> - <a id="pag">Editar clientes</a></li>
            <li style="list-style: none;"><a href="../Bd/bd.php">Consulta</a></li>
        </div>

        <div id="clientes">
            <h1>⠀Edição de Clientes</h1>
            <form type="text" name="text" method="POST" action="../php/salvaraltercli.php">
                <input type="hidden" name="cpf" value=<?php echo $resul['cpf'];?>>
                <p> <label id="pergunta">Nome:</label>
                    <input type="text" name="nome" value=<?php echo $resul['nome'];?> placeholder="Escreva seu nome" required></p>
                <p> <label id="pergunta">Telefone:</label>
                    <input type="text" name="tel" id="tel" placeholder="(XX) XXXXX-XXXX" class="form-control" onkeypress="$(this).mask('(00)0000-00000')" required value=<?php echo $resul['telefone'];?>></p>
                <p> <label id="pergunta">CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" class="form-control" onkeypress="$(this).mask('000.000.000-00');" required value=<?php echo $resul['cpf'];?>></p>
                <p> <label id="pergunta">CEP:</label>
                    <input type="text" name="cep" id="cep" placeholder="XXXXX-XXX" class="form-control" onkeypress="$(this).mask('00.000-000')" required value=<?php echo $resul['cep'];?>></p>
                <p> <label id="pergunta">Email:</label>
                    <input type="email" name="email" id="email" placeholder="joão@gmail.com" required value=<?php echo $resul['email'];?>></p>
                <p> <label id="pergunta">Senha:</label>
                    <input type="text" name="senha" id="senha" placeholder="Digite uma senha" required pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,}" title="Mínimo de 8 caracteres, uma letra maiúscula e uma minúscula" value=<?php echo $resul['senha'];?>></p>
                <label id="pergunta">Escolha sua data de nascimento:</label><br>
                <input id="date" type="date" name="nasc" required value=<?php echo $resul['nasc'];?>><br><br>
                <button id="confirm" type="submit">Editar</button>
                <button id="reset" href="../Bd/bd.php">Voltar</button>
            </form>
        </div>
    </header>

</body>

</html>