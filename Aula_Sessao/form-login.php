<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Sessão - Página de Login</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>
    <h1>Forneça seus dados de acesso</h1>
    <form action="acesso.php" method="post">
        <input type="text" name="usuario" id="usuario" placeholder="Informe seu nome de usuário"/>
        <br/>

        <input type="password" name="senha" id="senha" placeholder="Informe sua senha"/>
        <br/>

        <input type="submit" value="Acessar"/>
    </form>
</body>
</html>