<!DOCTYPE html>


<?php
//SE O COOKIE EXISTE É PORQUE O USUÁRIO LOGOU NA PÁGINA, CASO AO CONTRÁRIO NÃO HOUVE LOGUE 

//ATRIBUI VALORES AOS COOKIES: setcookie("");
//ACESSA O CONTEÚDO DO COOKIEs: varialvel global $_COOKIES.
//APAGA o CONTEÚDO DOS COOKIES: unsite("");


//todas as páginas que são restritas TODAS AS PÁGINAS DEVEM incluir a VALIDAÇÃO do usuário q deve esta logado.

//TEMOS DOIS CONTEÚDOS DE COKIES: no caso temos o "nome" e a "caneta", seu conteúdo é Diovana e BIC
//NUNCA QUE UM SETCOOKIE ENTRA DENTRO DE UM HTML
setcookie("nome", "Diovana");
setcookie("caneta", "BIC");


?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>

        <h1>AULA DE COOKIES</h1>
</head>

<body>

    <p> Esta página tem cookies</p>
    <P><a href="cookies2.php">Próxima página</P>


</body>

</html>