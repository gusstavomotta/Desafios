<?php

function multiplica_matriz_quadrada(array $matrizX, array $matrizY): array
{
    $matriz_resultado = array();
    for ($i = 0; $i < (sizeof($matrizX)); $i++) {
        for ($j = 0; $j < (sizeof($matrizY[0])); $j++) {
            for ($x = 0; $x < (sizeof($matrizX[0])); $x++) {
                $matriz_resultado[$i][$j] += ($matrizX[$i][$x] * $matrizY[$x][$j]);
            }
        }
    }
    return $matriz_resultado;
}

function multiplica_matriz_normal(array $matriz_A, array $matriz_B): array
{
    $linhas_A = sizeof($matriz_A);
    $colunas_A = sizeof($matriz_A[0]);

    $linhas_B = sizeof($matriz_B);
    $colunas_B = sizeof($matriz_B[0]);

    if ($colunas_A != $linhas_B) {
        echo "Impossível realizar a operação! O número de colunas da primeira matriz difere do número de linhas da segunda matriz.";
        exit;
    }

    $matriz_resultado = array_fill(0, $linhas_A, array_fill(0, $colunas_B, 0));

    for ($i = 0; $i < $linhas_A; $i++) {
        for ($j = 0; $j < $colunas_B; $j++) {
            for ($x = 0; $x < $colunas_A; $x++) {
                $matriz_resultado[$i][$j] += ($matriz_A[$i][$x] * $matriz_B[$x][$j]);
            }
        }
    }

    return $matriz_resultado;
}

function printa_matriz($matriz)
{
    print_r($matriz);
    echo "\n-------------------------------------------------\n";
}
