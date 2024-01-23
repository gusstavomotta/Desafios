<?php
require "functions.php";

//declaração das variáveis
$pokemon_name = $_GET['pokemon_name'];
$url = "https://pokeapi.co/api/v2/pokemon/$pokemon_name";
$arquivo = 'status.txt';
//verifica se o arquivo existe, caso true, le o arquivo, faz o foreach, se ele encontrar no txt um pokemon com o nome igual ao que foi passado na url ele retorna as infos do bicho
if (file_exists($arquivo)) {
    $pokemons_txt = json_decode(file_get_contents($arquivo), true);
    foreach ($pokemons_txt as $pokemon) {
        if ($pokemon['name'] == $pokemon_name) {
            printa_resultados($pokemon);
            exit;
        }
    }
}
//caso o arquivo nao existir ou não encontrar um correspondente no txt a url é lida, um array é criado usando como chave o mesmo nome passado na url
$pokemons_url = json_decode(file_get_contents($url), true);
$array_pokemons_status = array();
$array_pokemons_status['name'] = $pokemon_name;

//faz um loop para concatenar as stats do bicho, primeiro pega o nome do stat e depois o valor respectivo. depois passa pro array de pokemons para a chave stats o nome do status e o valor atribuido
for ($i = 0; $i < 6; $i++) {
    $nome_status = $pokemons_url['stats'][$i]['stat']['name'];
    $valor_status = $pokemons_url['stats'][$i]['base_stat'];
    $array_pokemons_status['stats'][$nome_status] = $valor_status;
}
//print_r($array_pokemons_status[1]);

//atualiza o array pokemons txt com os status atualizados do bicho, seja qual for, e escreve novamente no txt
//usei o json encode para escrever no txt pois tava dando problema na hora de fazer o get contents do txt que sempre retornava como uma string e estava causando muitos problemas
$pokemons_txt[] = $array_pokemons_status;
file_put_contents($arquivo, json_encode($pokemons_txt));
printa_resultados($array_pokemons_status);
