<?php

$limite = 15;
$pagina = $_GET['page'];
$inicio = ($limite * $pagina) - $limite;

$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";
if (!file_exists('pokemons.txt')) {
    $pokemons = json_decode(file_get_contents($url));
    file_put_contents('pokemons.txt', json_encode($pokemons->results));
}

$array_pokemons = json_decode(file_get_contents('pokemons.txt'), true);
$array_pokemons_paginado = array_slice($array_pokemons, $inicio, $limite);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api pokemons</title>
</head>

<body>
    <h1>Lista dos pokemons</h1>

    <ul>
        <?php foreach ($array_pokemons_paginado as $pokemon) : ?>
            <li><?php echo $pokemon['name'];
                //echo json_encode($pokemon);
                ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="paginacao">
        <?php for ($i = 1; $i <= ceil(sizeof($array_pokemons) / $limite); $i++) : ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>

</body>

</html>