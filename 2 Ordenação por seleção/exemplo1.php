<?php
    // Função para encontrar o menor elemento em um array e retornar seu índice
function encontrarMenor(array $arr)
{
    $menor = $arr[0];
    $indiceMenor = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $menor) {
            $menor = $arr[$i];
            $indiceMenor = $i;
        }
    }
    return $indiceMenor;
}

// Função de ordenação por seleção
function ordenacaoPorSelecao(array $arr)
{
    $novoArr = [];
    for ($i = 0, $tamanho = count($arr); $i < $tamanho; $i++) {
        $menor = encontrarMenor($arr); // Encontra o menor elemento no array
        // Remove o menor elemento do array original e o adiciona ao novo array ordenado
        array_push($novoArr, array_splice($arr, $menor, 1)[0]);
    }
    return $novoArr; // Retorna o novo array ordenado
}

// Array desordenado
$arrDesordenado = [5, 3, 6, 2, 10];

// Ordena o array usando o algoritmo de ordenação por seleção
$arrOrdenado = ordenacaoPorSelecao($arrDesordenado);

// Imprime o array ordenado
echo "Array ordenado: ";
print_r($arrOrdenado);
