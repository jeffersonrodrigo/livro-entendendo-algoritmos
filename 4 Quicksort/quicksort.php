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
        return array_merge(quicksort($menores), [$pivo], quicksort($maiores));
    }
}

// Teste do quicksort
$resultado = quicksort([10, 5, 2, 3]);
print_r($resultado);

?>
