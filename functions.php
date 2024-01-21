<?php

function multiplica_matriz_quadrada(array $matrizX, array $matrizY): array
{
    $matriz_resultado = null;
    //primeiro loop percorre as linhas da matriz
    for ($i = 0; $i < (sizeof($matrizX)); $i++) {
        //segundo loop percorre as colunas
        for ($j = 0; $j < (sizeof($matrizY[0])); $j++) {
            //terceiro loop percorre as colunas verticalmente
            for ($x = 0; $x < (sizeof($matrizX[0])); $x++) {
                $matriz_resultado[$i][$j] += ($matrizX[$i][$x] * $matrizY[$x][$j]);
            }
        }
    }
    //retorna a matriz resultado
    return $matriz_resultado;
}

function multiplica_matriz_normal(array $matrizX, array $matrizY) //: array
{
}

function printa_matriz($matriz)
{
    print_r($matriz);
    echo "\n-------------------------------------------------\n";
}
