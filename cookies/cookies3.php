<!DOCTYPE html>

//a função ANSET destrói a variavel.
<?php
//aqui ele mudou os valores de nome e caneta, para vazio, com o - 3600 ele apagou os valores
setcookie("nome", "", time() - 3600);
setcookie("caneta", "", time() - 3600);

//aqui garante que o valor não existe
unset($_COOKIE["nome"]);
unset($_COOKIE["caneta"]);

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>

<body>
    <h1>
        <center>FINAL</center>
    </h1>

</body>

</html>