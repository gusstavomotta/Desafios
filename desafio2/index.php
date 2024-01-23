<?php

$limite = 15;
$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$inicio = ($limite * $pagina) - $limite;

$url = "https://pokeapi.co/api/v2/pokemon?$limite=150&offset=$inicio";

if (!file_exists('pokemons.txt')) {
    $pokemons = json_decode(file_get_contents($url));
    file_put_contents('pokemons.txt', json_encode($pokemons->results));
}

$array_pokemons = json_decode(file_get_contents('pokemons.txt'), true);
$array_pokemons = array_slice($array_pokemons, $inicio, $limite);
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
        <?php foreach ($array_pokemons as $pokemon) : ?>
            <li><?php echo $pokemon['name']; ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="paginamentamento">
        <?php for ($i = 1; $i <= ceil(150 / $limite); $i++) : ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>

</body>

</html>