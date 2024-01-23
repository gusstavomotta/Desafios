<?php

function printa_resultados($array)
{
    header('Content-Type: application/json');
    echo json_encode($array);
}
