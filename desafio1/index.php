<?php
require "functions.php";
//declaração das matrizes
$matriz_quadrada_1 = [
    [2, 3],
    [5, 6]
];
$matriz_quadrada_2 = [
    [3, 4],
    [6, 7]
];

$matriz_normal_1 = [
    [1, 2, 3],
    [2, 4, 5]
];
$matriz_normal_2 = [
    [5, 7],
    [3, 6],
    [2, 3],
];
//retorno do resultado e print
$matriz_normal_resultado = multiplica_matriz($matriz_quadrada_1, $matriz_quadrada_2);
echo "\nResultados: \n";
printa_matriz($matriz_normal_resultado);
