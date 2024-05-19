### Algoritmo Quicksort

O **quicksort** é um algoritmo eficiente de ordenação que usa o conceito de **dividir para conquistar**. Ele funciona da seguinte maneira:

1. **Escolha do Pivô**: Selecione um elemento do array para ser o pivô. O pivô pode ser qualquer elemento, mas geralmente é o primeiro, o último ou um elemento aleatório.
2. **Particionamento**: Reorganize os elementos do array de tal forma que todos os elementos menores ou iguais ao pivô fiquem à esquerda e todos os elementos maiores fiquem à direita.
3. **Recursão**: Aplique o quicksort recursivamente aos subarrays à esquerda e à direita do pivô.
4. **Combinação**: Combine os subarrays ordenados para obter o array final ordenado.

O processo continua até que todos os subarrays contenham menos de dois elementos, momento em que são considerados ordenados.

#### Pivô
O pivô é o elemento escolhido para dividir o array durante o particionamento. Ele serve como referência para reorganizar os outros elementos do array em relação a ele.

#### Particionamento
O particionamento é o processo de reorganizar os elementos do array de modo que todos os elementos menores ou iguais ao pivô fiquem à esquerda e os maiores fiquem à direita. Esse passo é crucial para o funcionamento eficiente do quicksort.

### Exemplo de Código PHP

```php
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
```

### Resumo
- **Quicksort** é um algoritmo de ordenação eficiente que usa dividir para conquistar.
- **Pivô** é o elemento usado para particionar o array.
- **Particionamento** reorganiza os elementos em relação ao pivô.
- O algoritmo é recursivo e continua até que todos os subarrays tenham menos de dois elementos.