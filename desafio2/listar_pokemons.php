<?php
//declarando variáveis
$limite = 15;
$pagina = $_GET['page'];
$inicio = ($limite * $pagina) - $limite;
$url = "https://pokeapi.co/api/v2/pokemon?limit=150&offset=0";
$arquivo = 'pokemons.txt';

//verifica se o não existe, caso nao existir ele cria
if (!file_exists($arquivo)) {
    $pokemons = json_decode(file_get_contents($url));
    file_put_contents($arquivo, json_encode($pokemons->results));
}
//faz o json decode e o file get para pegar os dados do txt, precisei fazer o encode para depois fazer o decode e o get contents para ele retornar um array e eu conseguir fatiar
$array_pokemons = json_decode(file_get_contents($arquivo), true);
$array_pokemons_paginado = array_slice($array_pokemons, $inicio, $limite);

//html para printar os dados em lista e paginar
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
            <li>
                <?php
                //foreach para printar os resultados, precisa ser nesse formato para printar cada elemento como uma lista, caso contrario ele printa tudo em 1 indice
                echo json_encode($pokemon);
                //echo json_encode($pokemon['name']);
                //echo $pokemon['name'];
                ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="paginacao">
        <?php
        //calcula o total de paginas pegando o tamanho do array/pelo tamanho das paginas
        $total_paginas = ceil(sizeof($array_pokemons) / $limite);
        //loop para criar os links para cada página
        for ($i = 1; $i <= $total_paginas; $i++) :
            $link = "?page=" . $i;
            echo "<a href='$link'>$i</a>";
        endfor;
        ?>
    </div>

</body>

</html>