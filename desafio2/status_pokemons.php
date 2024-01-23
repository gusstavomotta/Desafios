<?php
$pokemon_name = isset($_GET['pokemon_name']) ? (string) $_GET['pokemon_name'] : 'bulbasaur';

$url = "https://pokeapi.co/api/v2/pokemon/$pokemon_name";

$pokemons = json_decode(file_get_contents($url));
file_put_contents('status.txt', json_encode($pokemons));
$status_pokemons = json_decode(file_get_contents('status.txt'), true);
for ($i = 0; $i < 6; $i++) {

    $teste = $status_pokemons['stats'][$i]['stat']['name'];
    print_r($teste);
}
print_r($status_pokemons['name']);
print_r($status_pokemons['stats']);
