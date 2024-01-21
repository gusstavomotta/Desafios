<?php
require "./functions.php";


$matriz_quadrada_1 = [
    [2, 3],
    [5, 6]
];
$matriz_quadrada_2 = [
    [3, 4],
    [6, 7]
];


$matriz_quadrada_resultado = multiplica_matriz_quadrada($matriz_quadrada_1, $matriz_quadrada_2);
echo "\nMatriz Quadrada: \n";
printa_matriz($matriz_quadrada_resultado);

/*

$matriz_normal_1 = [[1, 2, 3], [2, 4, 5]];
$matriz_normal_2 = [[5, 7, 8], [3, 6, 7]];

$matriz_normal_resultado = multiplica_matriz_normal($matriz_normal_1, $matriz_normal_2);
echo "\nMatriz Normal: \n";
printa_matriz($matriz_normal_resultado);
*/