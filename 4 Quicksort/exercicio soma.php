<?php

//4.1 Escreva o código para a função soma, vista anteriormente. -> soma[2, 4, 6]

function soma(array $arr){ // a palavra array aqui serve apenas para uma tipagem de parametro para garantir que o parametro informado sera um array
    $total = 0;
    for($i = 0; $i < count($arr); $i++){ 
        $total += $arr[$i];
    }
    return $total;
}

echo soma([2,4,6]);