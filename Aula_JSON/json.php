<!-- Arquivo de exemplo do uso de arquivos .json -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados de Pokemon</title>
</head>
<body>
    <h1>Dados de um Pokemon</h1>

    <?php
        /* Comando usado para ler e 'pegar' o conteúdo de um arquivo ou url */
        $p = file_get_contents("https://pokeapi.co/api/v2/pokemon/bulbasaur");
        $json = json_decode($p);

        echo "<p>" . $json->abilities[1]->ability->name . "</p>";

        echo "<pre>". json_encode($json, JSON_PRETTY_PRINT) . "</pre>";
    ?>
</body>
</html>