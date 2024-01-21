<?php
/*
caso eu percorrer apenas com o primeiro for e printar a matriz o programa vai me dar como resultado o array
posiçaõ 0 do array vai ser 2,3 e posicao 1 5,6

caso for feito o segundo for o programa irá printar de forma pontual esses valores, linha i, coluna j e printa apenas os valores

caso o terceiro for for feito ele irá percorrer de forma vertical as colunas e dessa forma caso eu printar  o array utilizando x e j
o programa retorna 2 , 5 e  3,6

*/
$matrizX = [
    [2, 3],
    [5, 6]
];
$matrizY = [
    [3, 4],
    [6, 7]
];

for ($i = 0; $i < (sizeof($matrizX)); $i++) {
    for ($j = 0; $j < (sizeof($matrizY[0])); $j++) {
        for ($x = 0; $x < (sizeof($matrizX[0])); $x++) {
            print_r("Matriz X: " . ($matrizX[$i][$x]) . "\n");
            print_r("Matriz Y: " . ($matrizY[$x][$j]) . "\n");
        }
    }
}
