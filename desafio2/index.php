<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Pokemons</title>
</head>

<body>
    <h1> Lista pokemons </h1>
    <p>

        <?php
        $pagina = 1;
        $limite = 15;
        $inicio = ($pagina * $limite) - $limite;

        $url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";
        $pokemons = json_decode(file_get_contents($url));
        file_put_contents('pokemons.txt', var_export($pokemons, true));

        foreach ($pokemons->results as $infos) {
            echo "<br>$infos->name<hr>";
        }
        ?>

    </p>
</body>

</html>