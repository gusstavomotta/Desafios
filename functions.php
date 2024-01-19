<?php

function multiplica_matriz_quadrada(array $matrizX, array $matrizY): array
{
    for ($i = 0; $i <= (sizeof($matrizX) - 1); $i++) {
        for ($j = 0; $j <= (sizeof($matrizX) - 1); $j++) {
            $matriz_resultado[$i][$j] = ($matrizX[$i][$j] * $matrizY[$i][$j]);
        }
    }
    return $matriz_resultado;
}

function multiplica_matriz_normal(array $matrizX, array $matrizY) //: array
{

    //$matriz_resultado[][] = null;
    //return $matriz_resultado;

}

function printa_matriz($matriz)
{
    print_r($matriz);
    echo "\n-------------------------------------------------\n";
}
