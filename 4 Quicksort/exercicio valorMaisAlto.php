<?php
//4.3 Encontre o valor mais alto em uma lista.
function valorMaisAlto(array $lista){
    $maisAlto = 0;
    for($i = 0; $i < count($lista); $i++){
        if($maisAlto < $lista[$i]){
            $maisAlto = $lista[$i];
        }
        //esse if também poderia ser feito com ternario
        //$maisAlto = ($maisAlto < $lista[$i]) ? $lista[$i] : $maisAlto;
    }
    return $maisAlto;
}

echo valorMaisAlto([1,8,2,3,7]);