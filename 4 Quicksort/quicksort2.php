<?php

function quicksort(array $array) {
    // Caso-base: arrays com menos de 2 elementos já estão "ordenados"
    if (count($array) < 2) {
        return $array;
    } else {
        $pivo = $array[0]; // Escolha do pivô
        // Elementos menores ou iguais ao pivô
        $menores = array_filter(array_slice($array, 1), function($item) use ($pivo) {
            return $item <= $pivo;
        });
        // Elementos maiores que o pivô
        $maiores = array_filter(array_slice($array, 1), function($item) use ($pivo) {
            return $item > $pivo;
        });
        // Concatena os arrays ordenados de menores, o pivô e maiores
        return array_merge(quicksort(array_values($menores)), [$pivo], quicksort(array_values($maiores)));
        /**Uso de array_values: Isso é usado para reindexar os arrays resultantes de array_filter, garantindo que eles tenham índices consecutivos. 
         * Isso ajuda a evitar problemas com índices indefinidos. */
    }
}

// Array com 10 números aleatórios entre 0 e 100
$testeArray = [45, 78, 12, 89, 24, 56, 91, 33, 67, 50];

$resultado = quicksort($testeArray);
print_r($resultado);

/**Detalhes das funções:
array_filter: Filtra elementos de um array usando uma função de callback. No código, ele é usado para criar os arrays $menores e $maiores comparando cada elemento com o pivô.
array_slice: Retorna uma parte do array. Aqui, ele é usado para ignorar o primeiro elemento do array, que é o pivô.
array_merge: Junta os arrays. No código, ele é usado para concatenar o resultado da ordenação dos menores, o pivô, e o resultado da ordenação dos maiores.
array_values: Reindexa um array, garantindo que os índices sejam consecutivos a partir de 0. */
?>
