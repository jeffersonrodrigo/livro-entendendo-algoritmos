<?php
//4.2

function conta(array $lista){
    if(empty($lista)) {// Caso base: se a lista estiver vazia, retorna 0
        return 0;
    }
    return 1 + conta(array_slice($lista,1));// Chama recursivamente a função com o restante da lista (excluindo o primeiro item) e adiciona 1 ao resultado da chamada recursiva.
}
$lista = ["ana", "pedro", "suellen", "jeff", "Claudia"];

echo conta($lista);