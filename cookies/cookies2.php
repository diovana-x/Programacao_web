<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>

<body>

    <h1>Página 2</h1>

    <?php
    //aqui diz que, a variavel "nome" possui o cookies que se localiza dentro da variavel nome.
    //$_COOKIE variavel SUPER GLOBAL
    $nome = $_COOKIE["nome"];
    $can = $_COOKIE["caneta"];

    ?>

    <p>Nome: <?= $nome ?> </p>
    <p>Caneta: <?= $can ?> </p>

    <p><a href="cookies3.php"> Próxima página </p>
</body>

</html>