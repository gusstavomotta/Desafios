<?php

function multiplica_matriz_quadrada(array $matriz_X, array $matriz_Y): array
{
    //O programa envia um aviso pois a matriz declarada nao foi inicializada com 0
    $matriz_resultado = array();
    //3 loops sao criados para percorrer as matrizes, o 1 percorre linhas, o 2 colunas e o 3 colunas verticalmente
    for ($i = 0; $i < (sizeof($matriz_X)); $i++) {
        for ($j = 0; $j < (sizeof($matriz_Y[0])); $j++) {
            for ($x = 0; $x < (sizeof($matriz_X[0])); $x++) {
                $matriz_resultado[$i][$j] += ($matriz_X[$i][$x] * $matriz_Y[$x][$j]); //coloca na posição i j da matriz resultado a multiplicação entre as duas matrizes
            }
        }
    }
    //retorna a matriz resultado
    return $matriz_resultado;
}

function multiplica_matriz_normal(array $matriz_A, array $matriz_B): array
{
    //get das dimensões das matrizes
    $linhas_A = sizeof($matriz_A);
    $colunas_A = sizeof($matriz_A[0]);
    $linhas_B = sizeof($matriz_B);
    $colunas_B = sizeof($matriz_B[0]);

    //valida se o calculo pode ser feito
    if ($colunas_A != $linhas_B) {
        echo "Impossível realizar a operação! O número de colunas da primeira matriz difere do número de linhas da segunda matriz.";
        exit;
    }
    //dando warning pois a matriz não foi inicializada com 0
    $matriz_resultado = null;
    //3 loops sao criados para percorrer as matrizes, o 1 percorre linhas, o 2 colunas e o 3 colunas verticalmente
    for ($i = 0; $i < $linhas_A; $i++) {
        for ($j = 0; $j < $colunas_B; $j++) {
            for ($x = 0; $x < $colunas_A; $x++) {
                $matriz_resultado[$i][$j] += ($matriz_A[$i][$x] * $matriz_B[$x][$j]);
            }
        }
    }
    //retorna a matriz resultado
    return $matriz_resultado;
}
//printa qualquer matriz passada como parametro
function printa_matriz($matriz)
{
    print_r($matriz);
    echo "\n-------------------------------------------------\n";
}
