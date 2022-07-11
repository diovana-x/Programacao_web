<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>

    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>

<body>
    <h1>Cadastro de Alunos</h1>

    <form method="POST" action="insere_aluno.php">


        <label for="text"> Nome do aluno: </label>
        <input type="text" name="nome" id="nome" /></br>

        <label for="date"> Data de Nascimento </label>
        <input type="date" name="data" id="data" /></br>

        <label for="cidade"> Cidade: </label>
        <input type="text" name="cidade" id="cidade" /></br>

        <inpuit type="subimit" value="Cadastrar" />



    </form>
</body>

</html>