<?php

function api()
{
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $pokemons = curl_exec($ch);
    print_r(json_decode($pokemons));
    curl_close($ch);
}

api();
